<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\PurchaseConfirmed;
use App\Models\Book;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Publisher;
use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Stripe\Charge;
use Stripe\Stripe;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author', 'publisher', 'categories');
        if (request()->has('category')) {
            $category_slugs = request()->get('category');
            $books = $books->whereHas('categories', function ($q) use ($category_slugs) {
                $q->whereIn('slug', $category_slugs);
            });
        }
        if (request()->has('publisher')) {
            $publisher_slugs = request()->get('publisher');
            $books = $books->whereHas('publisher', function ($q) use ($publisher_slugs) {
                $q->whereIn('slug', $publisher_slugs);
            });
        }
        $books = $books->orderBy('id', 'DESC')->paginate(25);
        $categories = Category::all()->chunk(Category::count() / 2);
        $publishers = Publisher::all();
        return view('user.book.index', compact('categories', 'publishers', 'books'));
    }

    public function showCartPage()
    {
        return view('user.book.cart');
    }

    public function showCheckoutPage()
    {
        return view('user.book.checkout');
    }

    public function stripePost(Request $request)
    {
        $cart = collect(json_decode($request->cart));
        $total_price = 0;
        foreach ($cart as $item) {
            $total_price += $item->total_price;
        }

        if ($total_price > 0) {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = Charge::create([
                "amount" => $total_price,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => "Payment Dedicated Through BookStore",
            ]);
            $charge = (object)$charge;
            $payment = Payment::create([
                'payment_method' => 'stripe',
                'transaction_id' => $charge->id,
                'amount' => $total_price,
                'status' => $charge['status'],
                'response' => json_encode($charge)
            ]);
            if ($charge['status'] == 'succeeded') {
                $purchase = [];
                foreach ($cart as $item) {
                    $purchase[] = [
                        'user_id' => Auth::id(),
                        'book_id' => $item->id,
                        'payment_id' => $payment->id,
                        'price' => $item->price,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                }
                Purchase::insert($purchase);
            }

            $payment->refresh();
            $payment->load('purchases');
            Mail::to(Auth::user()->email)->send(new PurchaseConfirmed($payment));

        }
        Session::flash('success', "Book Purchased Successfully");
        return back();
    }

    public function downloadBook($book)
    {
        $id = decrypt($book);
        $book = Book::find($id);
        if (!$book) {
            new \Exception('Invalid URL');
        }

        if (Storage::exists($book->file_path)) {
            return Storage::download($book->file_path);
        }

        return response()->download(public_path($book->file_path));

    }

    public function purchasedBook()
    {
        $user = Auth::user();
        $purchases = $user->purchases;
        return view('user.book.my_books', compact('purchases'));
    }

    public function show(Book $book)
    {
        $book->load(['author', 'publisher', 'categories']);

        $books = Book::limit(3)->get();
        return view('user.book.detail', get_defined_vars());
    }

}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\FavouriteBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::guard('web')->user();
        $books = $user->favourite_books()->paginate(20);
        return view('user.favourite.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => ['required'],
            'status' => ['required'],
        ]);

        $user = Auth::guard('web')->user();

        if ($request->status) {
            FavouriteBook::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'book_id' => $request->book_id,
                ],
                [
                    'user_id' => $user->id,
                    'book_id' => $request->book_id,
                ],
            );
        } else {
            FavouriteBook::where('book_id', $request->book_id)->where('user_id', $user->id)->delete();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

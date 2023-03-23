<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

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
//        dd($books);
//        $books = Book::with('author', 'publisher', 'categories')->orderBy('id', 'DESC')->paginate(25);
        $categories = Category::all()->chunk(Category::count() / 2);
        $publishers = Publisher::all();
        return view('user.book.index', compact('categories', 'publishers', 'books'));
    }
}

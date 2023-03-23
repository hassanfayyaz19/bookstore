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
        $books = Book::with('author', 'publisher', 'categories')->orderBy('id', 'DESC')->paginate(25);
        $categories = Category::all()->chunk(Category::count() / 2);
        $publishers = Publisher::all();
        return view('user.book.index', compact('books', 'categories', 'publishers'));
    }
}

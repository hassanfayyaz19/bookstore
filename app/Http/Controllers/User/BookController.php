<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author', 'publisher', 'categories')->orderBy('id', 'DESC')->get();
        return view('user.book.index', compact('books'));
    }
}

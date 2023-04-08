<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BookReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $username = $user->first_name . ' ' . $user->last_name;
        $exists = BookReview::where('book_id', $request->book_id)->where('username', $username)->exists();
        if ($exists) {
            return back()->withError('You already added the review');
        }
        BookReview::create([
            'book_id' => $request->book_id,
            'username' => $username,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);
        return back()->withSuccess('Review is added successfully. it will be appeared after admin approved it');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookReview $bookReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookReview $bookReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookReview $bookReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookReview $bookReview)
    {
        //
    }
}

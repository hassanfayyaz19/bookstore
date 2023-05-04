<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Book;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (\request()->has('tag')) {
            $category = \request()->get('category');
            $blogs = Blog::with(['user'])
                ->whereHas('categories', function ($q) use ($category) {
                    $q->where('slug', $category);
                })
                ->latest()->paginate(11);
            return view('user.blog.index', get_defined_vars());
        }

        $blogs = Blog::with(['user'])->latest()->paginate(11);
        $blog_categories = BlogCategory::latest()->get();
        $recommended_books = Book::with('categories', 'book_addons')->recommended()->get();
        return view('user.blog.index', get_defined_vars());
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $blog)
    {
        $blog = Blog::with('user', 'categories', 'recommended_books', 'comments', 'comments.replies', 'comments.user')->whereSlug($blog)->first();
        $latest_blogs = Blog::with(['user'])->latest()->limit(5)->get();
        $blog_categories = BlogCategory::latest()->get();
        $recommended_books = Book::with('categories', 'book_addons')->recommended()->get();
//        dd($blog);
        return view('user.blog.show', get_defined_vars());
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

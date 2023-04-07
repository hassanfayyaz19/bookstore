<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_category = BlogCategory::all();
        //dd($blog_category);
        return view('admin.blog.category.index', compact('blog_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'description' => 'nullable|string',

            ]);

            $blog_category = new BlogCategory();
            $blog_category->name = $request->name;
            $blog_category->slug = Str::slug($request->slug);
            $blog_category->description = $request->description;
            $blog_category->save();
            return back()->with('message', 'Category Added Successfully!');

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
    public function edit(BlogCategory $blog_category)
    {
        return view('admin.blog.category.edit', compact('blog_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategory $blog_category)
    {
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'description' => 'nullable|string',

            ]);

            $blog_category->name = $request->name;
            $blog_category->slug = Str::slug($request->slug);
            $blog_category->description = $request->description;
            $blog_category->update();
            return back()->with('message', 'Category Added Successfully!');

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategory $blog_category)
    {
        $blog_category->delete();
        return back()->with('message', 'Category Deleted Successfully');
    }
}

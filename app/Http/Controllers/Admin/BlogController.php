<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $response = $this->showData(request());
            return response()->json($response);
        }
        return view('admin.blog.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog_categories = BlogCategory::all();
        $status = Blog::STATUS;
        $books = Book::latest()->get();
        return view('admin.blog.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_ids' => 'required|array',
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => ['required', File::image()->max(2 * 1024)],
            'published_at' => 'required|date',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
            'status' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->body = $request->body;
        if ($request->hasFile('image')) {
            $path = 'blogs/';
            $blog->image = $this->uploadFile($request->image, $path);
        }
        $blog->published_at = $request->published_at;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->status = $request->status;

        $blog->user_id = Auth::guard('admin')->user()->id;
        $blog->save();
        $blog->categories()->sync($request->category_ids);
        $blog->recommended_books()->sync($request->book_ids);
        return back()->withSuccess('Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $blog_categories = BlogCategory::all();
        $status = Blog::STATUS;
        $books = Book::latest()->get();
        return view('admin.blog.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'category_ids' => 'required|array',
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => [File::image()->max(2 * 1024)],
            'published_at' => 'required|date',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
            'status' => 'required',
        ]);

        $blog->title = $request->title;
        $blog->body = $request->body;
        if ($request->hasFile('image')) {
            $path = 'blogs/';
            $blog->image = $this->uploadFile($request->image, $path);
        }
        $blog->published_at = $request->published_at;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->status = $request->status;
        $blog->save();
        $blog->categories()->sync($request->category_ids);
        $blog->recommended_books()->sync($request->book_ids);
        return back()->withSuccess('Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->delete()) {
            return back()->withSucess('Data Deleted Successful');
        }

        return back()->withError('Data Not Deleted Successful');
    }

    protected function uploadFile($file, $path)
    {
        $filePath = $file->store($path, 'public');
        return '/storage/' . $filePath;
    }

    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            1 => 'title',
            2 => 'image',
            3 => 'published_at',
            4 => 'status',
        );
        $totalData = Blog::with('categories')->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = Blog::with('categories')->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = Blog::with('categories')
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('language', 'LIKE', "%{$search}%");
            $results = $query
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = $query->count();
        }

        $data = array();
        if (!empty($results)) {
            foreach ($results as $key => $row) {
                $params = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
                $nestedData['id'] = $row->id;
                $nestedData['title'] = $row->title;
                $nestedData['image'] = "<img class='img-thumbnail' src='$row->image' width='150px'/>";
                $nestedData['published_at'] = date('d-m-d H:i:s', strtotime($row->published_at));
                $nestedData['status'] = $row->status;

                $id = $row->id;
                $edit_link = route("admin.blog.edit", ["blog" => $id]);
                $del_link = route("admin.blog.destroy", ["blog" => $id]);
                $csrf = csrf_token();

                $nestedData['options'] = "
                    <div class='btn-group' role='group'>
                    <a href='$edit_link' title='Edit' class='edit_data mr-2 btn btn-primary btn-sm rounded'>Edit</a>
                    <form action='$del_link' method='POST' class='delete_form'>
                    <input type='hidden' name='_token' value='$csrf'>
                    <input type='hidden' name='_method' value='delete' />
                    <button type='submit' title='Delete' class='delete_data btn btn-danger btn-sm' data-id='$row->id'>
                    Delete</button>
                    </form>
                    </div>
                    ";
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => (int)$request->input('draw'),
            "recordsTotal" => (int)$totalData,
            "recordsFiltered" => (int)$totalFiltered,
            "data" => $data
        );
        return $json_data;
    }
}

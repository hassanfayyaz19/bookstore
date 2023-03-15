<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
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
        $authors = Author::all();
        $publishers = Publisher::all();
        return view('admin.books.index', compact('authors', 'publishers'));
    }

    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            1 => 'title',
            2 => 'author_id',
            3 => 'genre',
            4 => 'price',
            5 => 'publisher_id',
        );
        $totalData = Book::count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = Book::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = Book::where('title', 'LIKE', "%{$search}%")
                ->orWhere('genre', 'LIKE', "%{$search}%")
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
                $nestedData['author_id'] = $row->author_id;
                $nestedData['genre'] = $row->genre;
                $nestedData['price'] = $row->price;
                $nestedData['publisher_id'] = $row->publisher_id;

                $id = $row->id;
                $del_link = route("admin.book.destroy", ["book" => $id]);
                $csrf = csrf_token();

                $nestedData['options'] = "
                    <div class='btn-group' role='group'>
                    <button title='Edit' class='edit_data mr-2 btn btn-primary btn-sm rounded' data-params='$params'>Edit</button>
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
        $book = new Book();
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->genre = $request->genre;
        $book->price = $request->price;
        $book->publisher_id = $request->publisher_id;
        $book->publication_date = $request->publication_date;
        $book->page_count = $request->page_count;
        $book->description = $request->description;
        $book->save();
        return response()->json(['status' => 'success', 'message' => 'Data Inserted Successful']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->genre = $request->genre;
        $book->price = $request->price;
        $book->publisher_id = $request->publisher_id;
        $book->publication_date = $request->publication_date;
        $book->page_count = $request->page_count;
        $book->description = $request->description;
        $book->save();
        return response()->json(['status' => 'success', 'message' => 'Data Updated Successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if ($book->delete()) {
            $response = array('status' => 'success', 'message' => 'Data Deleted Successful');
            return response()->json($response, 200);
        }

        $response = array('status' => 'error', 'message' => 'Data Not Deleted Successful');
        return response()->json($response, 403);
    }
}

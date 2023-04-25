<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookAddon;
use Illuminate\Http\Request;

class BookAddonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Book $book)
    {
        if (request()->ajax()) {
            $response = $this->showData(request(), $book);

            return response()->json($response);
        }
        return view('admin.books.addons.index', compact('book'));

    }


    protected function showData($request, $book)
    {
        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'price',
        );
        $totalData = BookAddon::where('book_id', $book->id)->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = BookAddon::where('book_id', $book->id)->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = BookAddon::where('book_id', $book->id)->where('name', 'LIKE', "%{$search}%");
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
                $nestedData['name'] = $row->name;
                $nestedData['price'] = $row->price;
                $id = $row->id;
                $del_link = route("admin.book.addon.destroy", ["book" => $book->id, 'addon' => $id]);
                $csrf = csrf_token();

                $nestedData['options'] = "
                    <div class='btn-group' role='group'>
                    <button title='Edit' class='edit_data mr-2 btn btn-primary btn-sm rounded' data-params='$params'>Edit</button>
                    <form action='$del_link' method='POST' class='delete_form' data-table-id='table'>
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
    public function create(Book $book)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'url' => 'required',
        ]);

        $book_addon = new BookAddon();
        $book_addon->book_id = $book->id;
        $book_addon->name = $request->name;
        $book_addon->price = $request->price;
        $book_addon->description = $request->description;

        if ($request->hasFile('url')) {
            $path = 'books/' . $book->id . '/addons';
            $book_addon->url = $this->uploadFile($request->url, $path);
        }

        $book_addon->save();
        return response()->json(['status' => 'success', 'message' => 'Data Inserted Successful']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book, BookAddon $addon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book, BookAddon $book_addon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book, BookAddon $addon)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
        ]);

        $addon->book_id = $book->id;
        $addon->name = $request->name;
        $addon->price = $request->price;
        $addon->description = $request->description;

        if ($request->hasFile('url')) {
            $path = 'books/' . $book->id . '/addons';
            $addon->url = $this->uploadFile($request->url, $path);
        }

        $addon->save();
        return response()->json(['status' => 'success', 'message' => 'Data Inserted Successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book, BookAddon $addon)
    {
        if ($addon->delete()) {
            $response = array('status' => 'success', 'message' => 'Data Deleted Successful');
            return response()->json($response, 200);
        }

        $response = array('status' => 'error', 'message' => 'Data Not Deleted Successful');
        return response()->json($response, 403);
    }

    protected function uploadFile($file, $path)
    {
        $filePath = $file->store($path, 'public');
        return '/storage/' . $filePath;
    }
}

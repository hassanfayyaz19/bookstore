<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BannerBookController extends Controller
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
        $books = Book::all();
        return view('admin.books.banner', compact('books'));
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
            'books' => 'required|array'
        ]);

        Book::whereIn('id', $request->books)->update(['is_banner' => 1]);

        return response()->json(['status' => 'success', 'message' => 'Data Inserted Successful']);
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
    public function destroy(Book $banner_book)
    {
        $banner_book->is_featured = 0;
        $banner_book->save();
        return response()->json(['status' => 'success', 'message' => 'Book Removed from banner section Successful']);
    }

    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            1 => 'title',
        );
        $totalData = Book::banner()->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = Book::banner()
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = Book::banner()
                ->where('title', 'LIKE', "%{$search}%");
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

                $id = $row->id;
                $del_link = route("admin.banner_book.destroy", ["banner_book" => $id]);
                $csrf = csrf_token();

                $nestedData['options'] = "
                    <div class='btn-group' role='group'>
                     <form action='$del_link' method='POST' class='delete_form'>
                    <input type='hidden' name='_token' value='$csrf'>
                    <input type='hidden' name='_method' value='delete' />
                    <button type='submit' title='Remove from recommendation section' class='delete_data btn btn-danger btn-sm' data-id='$row->id'>
                    Remove</button>
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

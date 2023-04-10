<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookReview;
use Illuminate\Http\Request;

class BookReviewController extends Controller
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

        $books = Book::orderBy('id', 'DESC')->get();
        return view('admin.book_review.index', compact('books'));
    }

    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            1 => 'book_id',
            2 => 'user_name',
            3 => 'rating',
        );
        $totalData = BookReview::with('book')->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = BookReview::with('book')
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = BookReview::with('book')
                ->where('username', 'LIKE', "%{$search}%");
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
                $nestedData['book_id'] = $row->book->title;
                $nestedData['username'] = $row->username;
                $nestedData['rating'] = $row->rating;

                $id = $row->id;
                $del_link = route("admin.book_review.destroy", ["book_review" => $id]);
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book_review = new BookReview();
        $book_review->book_id = $request->book_id;
        $book_review->username = $request->username;
        $book_review->comment = $request->comment;
        $book_review->rating = $request->rating;
        $book_review->is_active = $request->is_active == 1 ? 1 : 0;

        if ($request->hasFile('profile')) {
            $path = 'books/' . $request->book_id . '/review';
            $book_review->profile = $this->uploadFile($request->profile, $path);
        }
        $book_review->save();
        return response()->json(['status' => 'success', 'message' => 'Data Inserted Successful']);
    }

    protected function uploadFile($file, $path)
    {
        $filePath = $file->store($path, 'public');
        return '/storage/' . $filePath;
    }

    /**
     * Display the specified resource.
     */
    public function show(BookReview $book_review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookReview $book_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookReview $book_review)
    {
        $book_review->book_id = $request->book_id;
        $book_review->username = $request->username;
        $book_review->comment = $request->comment;
        $book_review->rating = $request->rating;
        $book_review->is_active = $request->is_active == 1 ? 1 : 0;

        if ($request->hasFile('profile')) {
            $path = 'books/' . $request->book_id . '/review';
            $book_review->profile = $this->uploadFile($request->profile, $path);
        }
        $book_review->save();
        return response()->json(['status' => 'success', 'message' => 'Data Updated Successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookReview $book_review)
    {
        if ($book_review->delete()) {
            $response = array('status' => 'success', 'message' => 'Data Deleted Successful');
            return response()->json($response, 200);
        }

        $response = array('status' => 'error', 'message' => 'Data Not Deleted Successful');
        return response()->json($response, 403);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
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
        return view('admin.author.index');
    }


    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            2 => 'first_name',
            3 => 'last_name',
        );
        $totalData = Author::count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = Author::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = Author::where('first_name', 'LIKE', "%{$search}%")
                ->orWhere('last_name', 'LIKE', "%{$search}%");
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
                $nestedData['image'] = '<img src=' . "$row->image_url" . ' class="img-thumbnail" width="100px">';
                $nestedData['first_name'] = $row->first_name;
                $nestedData['last_name'] = $row->last_name;

                $id = $row->id;
                $del_link = route("admin.author.destroy", ["author" => $id]);
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
        return array(
            "draw" => (int)$request->input('draw'),
            "recordsTotal" => (int)$totalData,
            "recordsFiltered" => (int)$totalFiltered,
            "data" => $data
        );
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
        $author = new Author();
        $this->save($request, $author);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $this->save($request, $author);

        return response()->json(['status' => 'success', 'message' => 'Data Updated Successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        if ($author->delete()) {
            $response = array('status' => 'success', 'message' => 'Data Deleted Successful');
            return response()->json($response, 200);
        }

        $response = array('status' => 'error', 'message' => 'Data Not Deleted Successful');
        return response()->json($response, 403);
    }

    protected function uploadFile($file, $path): string
    {
        $filePath = $file->store($path, 'public');
        return asset('/storage/' . $filePath);
    }

    /**
     * @param Request $request
     * @param Author $author
     * @return void
     */
    public function save(Request $request, Author $author): void
    {
        $author->first_name = $request->first_name;
        $author->last_name = $request->last_name;
        $author->bio = $request->bio;
        $author->save();

        if ($request->hasFile('image_url')) {
            $path = 'authors/' . $author->id . '/';
            $author->image_url = $this->uploadFile($request->image_url, $path);
            $author->save();
        }
    }
}

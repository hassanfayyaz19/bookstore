<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('admin.category.index');
    }

    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            1 => 'name',
        );
        $totalData = Category::count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = Category::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = Category::where('name', 'LIKE', "%{$search}%");
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

                $id = $row->id;
                $del_link = route("admin.category.destroy", ["category" => $id]);
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
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return response()->json(['status' => 'success', 'message' => 'Data Inserted Successful']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return response()->json(['status' => 'success', 'message' => 'Data Updated Successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            $response = array('status' => 'success', 'message' => 'Data Deleted Successful');
            return response()->json($response, 200);
        }

        $response = array('status' => 'error', 'message' => 'Data Not Deleted Successful');
        return response()->json($response, 403);
    }
}

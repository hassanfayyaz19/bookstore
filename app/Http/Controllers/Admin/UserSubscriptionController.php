<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserSubscriptionController extends Controller
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
        return view('admin.user_subscription.index');
    }

    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            1 => 'user_id',
            2 => 'subscription_plan_id',
            3 => 'amount',
            4 => 'status',
            5 => 'start_date',
            6 => 'end_date',
        );
        $totalData = UserSubscription::with(['user', 'subscription_plan'])->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = UserSubscription::with(['user', 'subscription_plan'])->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = UserSubscription::with(['user', 'subscription_plan'])->where('amount', 'LIKE', "%{$search}%")
                ->orWhere('start_date', 'LIKE', "%{$search}%")
                ->orWhere('end_date', 'LIKE', "%{$search}%")
                ->orWhere('status', 'LIKE', "%{$search}%");

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

                $status = "<span class='text-danger'>In-Active</span>";
                if ($row->status == 1) {
                    $status = "<span class='text-success'>Active</span>";
                }

                $nestedData['id'] = $row->id;
                $nestedData['user_id'] = $row->user->first_name . ' ' . $row->user->last_name;
                $nestedData['subscription_plan_id'] = $row->subscription_plan->name;
                $nestedData['amount'] = '$ ' . $row->amount;
                $nestedData['status'] = $status;
                $nestedData['start_date'] = Carbon::parse($row->start_date)->format('d-m-Y h-i-s A');
                $nestedData['end_date'] = Carbon::parse($row->end_date)->format('d-m-Y h-i-s A');

                $payment = htmlspecialchars(json_encode($row->payment), ENT_QUOTES, 'UTF-8');
                $nestedData['options'] = "
                    <div class='btn-group' role='group'>
                    <button title='Details' class='edit_data mr-2 btn btn-secondary btn-sm rounded' data-payment='$payment'>Details</button>
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserSubscription $user_subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserSubscription $user_subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserSubscription $user_subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSubscription $user_subscription)
    {
        //
    }
}

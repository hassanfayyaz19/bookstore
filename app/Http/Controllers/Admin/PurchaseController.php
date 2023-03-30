<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Carbon\Carbon;

class PurchaseController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $response = $this->showData(request());
            return response()->json($response);
        }
        return view('admin.purchase.index');
    }

    protected function showData($request)
    {
        $columns = array(
            0 => 'id',
            1 => 'payment_method',
            2 => 'transaction_id',
            3 => 'amount',
            4 => 'status',
            5 => 'created_at',
        );
        $totalData = Payment::count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $results = Payment::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $query = Payment::where('payment_method', 'LIKE', "%{$search}%")
                ->orWhere('transaction_id', 'LIKE', "%{$search}%")
                ->orWhere('amount', 'LIKE', "%{$search}%")
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

                $status = "<span class='text-danger'>failed</span>";
                if ($row->status == 'succeeded') {
                    $status = "<span class='text-success'>succeeded</span>";
                }

                $nestedData['id'] = $row->id;
                $nestedData['payment_method'] = $row->payment_method;
                $nestedData['transaction_id'] = $row->transaction_id;
                $nestedData['amount'] = '$ ' . $row->amount;
                $nestedData['status'] = $status;
                $nestedData['created_at'] = Carbon::parse($row->created_at)->format('d-m-Y h-i-s A');

                $nestedData['options'] = "
                    <div class='btn-group' role='group'>
                    <button title='Details' class='edit_data mr-2 btn btn-secondary btn-sm rounded' data-params='$params'>Details</button>
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

    public function show(Payment $purchase)
    {
        $payment = $purchase;
        return view('admin.purchase.show', compact('payment'))->render();
    }

}

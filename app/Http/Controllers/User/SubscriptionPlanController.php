<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $subscription_plans = SubscriptionPlan::orderBy('id', 'ASC')->get();
        return view('user.subscription.plans', get_defined_vars());
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class UserSubscriptionController extends Controller
{
    public function showSubscriptionPage(SubscriptionPlan $subscription_plan)
    {
        return view('user.subscription.index', get_defined_vars());
    }

    public function saveUserSubscription(Request $request, SubscriptionPlan $subscription_plan)
    {
        $total_price = round($subscription_plan->price);
        $user = Auth::guard('web')->user();

        if ($total_price <= 0) {
            Session::flash('error', "Invalid Price");
            return back();
        }


        $user_subscription = UserSubscription::where('user_id', $user->id)->where('subscription_plan_id', $subscription_plan->id)->where('status', 1)->exists();
        if ($user_subscription) {
            Session::flash('error', "You already subscribed this plan");
            return back();
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            "amount" => $total_price * 100,
            "currency" => "USD",
            "source" => $request->stripeToken,
            "description" => "Payment Dedicated Through BookStore For Subscribing " . $subscription_plan->name,
        ]);
        $charge = (object)$charge;
        $payment = Payment::create([
            'payment_method' => 'stripe',
            'transaction_id' => $charge->id,
            'amount' => $total_price,
            'status' => $charge['status'],
            'response' => json_encode($charge)
        ]);
        if ($charge['status'] == 'succeeded') {
            UserSubscription::create([
                'user_id' => $user->id,
                'subscription_plan_id' => $subscription_plan->id,
                'payment_id' => $payment->id,
                'status' => 1,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addMonth(),
                'amount' => $total_price
            ]);
            $user->clearSubscriptionDiscountCache();
        }
        Session::flash('success', "Subscription Purchased Successfully");
        return back();
    }
}

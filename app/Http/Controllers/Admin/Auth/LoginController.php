<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Log::info("Admin Login ____construct");
    }

    public function showAdminLoginForm()
    {
        return view('admin.auth.login');
    }

    public function adminLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $arrCredentials = [
            'email' => $request->input("email"),
            'password' => $request->input("password"),
        ];

        $admin = Admin::where('email', '=', $request->email)->first();

        if ($admin && Auth::guard('admin')->attempt($arrCredentials, $request->input("remember"))) {
            return redirect()->route('admin.home');
        }

        $validator->getMessageBag()->add('error', 'Credentials not matched');

        return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
    }

    public function adminLogout()
    {
        Auth::guard("admin")->logout();
        return redirect()->route('admin.login');
    }
}

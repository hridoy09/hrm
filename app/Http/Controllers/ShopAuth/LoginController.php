<?php

namespace App\Http\Controllers\ShopAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('shop.auth.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function login(Request $request)
    {
        // dd($request->all());
        // Validate Login Data
        $request->validate([
            'email' => 'required|max:50',
            'password' => 'required',
        ]);

        // Attempt to login
        if (Auth::guard('shop')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // dd($request->all());
            // Redirect to dashboard
            // session()->flash('success', 'Successully Logged in !');
            return redirect("/user-index");
        } else {
            // error
            session()->flash('error', 'Invalid email and password');
            return back();
            // return back()->withInput($request->only('email', 'remember'));
        }
    }

    public function logout()
    {
        Auth::guard('shop')->logout();
        return redirect()->route('login.shop');
    }

    protected function guard()
    {
        return Auth::guard('shop');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/cscHome";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('guest:csc')->except('logout');
    //     $this->middleware('guest:forwarder')->except('logout');
    //     $this->middleware('guest:circle_officer')->except('logout');
    //     $this->middleware('guest:mandal_officer')->except('logout');
    // }

    public function showcscLoginForm()
    {
        return view('auth.login', ['url' => 'csc']);
    }

    public function cscLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('csc')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/csc');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

     public function showforwarderLoginForm()
    {
        return view('auth.login', ['url' => 'forwarder']);
    }

    public function forwarderLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('forwarder')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/forwarder');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showcircle_officerLoginForm()
    {
        return view('auth.login', ['url' => 'circle_officer']);
    }

    public function circle_officerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('circle_officer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/circle_officer');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showmandal_officerLoginForm()
    {
        return view('auth.login', ['url' => 'mandal_officer']);
    }

    public function mandal_officerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('mandal_officer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/mandal_officer');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\SiteSettings;
use Illuminate\Http\Request;
use Auth;
use User;

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

    protected function authenticated (Request $request, $user)
    { }


    public function __construct()
    {
         $this->middleware('guest')->except('logout');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showLoginForm()
    {
        $settings = SiteSettings::find(1);
        return view('auth.login', compact('settings'));
    }


    public function field(): string
    {
        return filter_var(request()->phn_number,FILTER_VALIDATE_EMAIL) ? 'email' : 'phn_number';
    }

    public function redirectPath()
    {
        if (Auth::user()->role->id === 1) {
            return route('admin.dashboard');
        } if (Auth::user()->role->id === 2) {
            return route('admin.dashboard');
        } if (Auth::user()->role->id === 3) {
            return route('admin.dashboard');
        }

        return route('search.doctor');
    }
    public function login(LoginRequest $request)
    {
        if (Auth::attempt([$this->field() => $request->phn_number, 'password' => $request->password])) {
            return redirect($this->redirectPath());
        }

         return $this->sendFailedLoginResponse($request);
    }


}

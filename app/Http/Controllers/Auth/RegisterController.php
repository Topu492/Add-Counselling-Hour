<?php

namespace App\Http\Controllers\Auth;

use App\SiteSettings;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1 )
        {
           $this->redirectTo = route('admin.dashboard');

        } elseif(Auth::check() && Auth::user()->role->id == 2 )
        {
            $this->redirectTo = route('doctor.dashboard');

        } elseif(Auth::check() && Auth::user()->role->id == 3 )
        {
            $this->redirectTo = route('nurse.dashboard');

        } else {
            $this->redirectTo = route('user.dashboard');
        }

        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'username' =>['required', 'string' ,'unique:users' , 'min:4'],
            'phn_number' => ['required','string', 'max:15', 'min:11','unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phn_number' => $data['phn_number'],
            'username' => $data['username'],
            // 'role_id' => $data['role_id'],
        ]);
    }

    public function showRegistrationForm()
    {
        $settings = SiteSettings::find(1);
        return view('auth.register', compact('settings'));
    }
}

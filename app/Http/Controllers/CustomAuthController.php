<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use Auth;
Use App\User;
use App\Teacher;
use AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;



class CustomAuthController extends Controller
{

    // start
    public function showPage(){
        return view('custom.login');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request ->email, 'password' => $request->password]))
        {
            return redirect(route('doctor.dashboard'));
        }

    }
    public function passwordChange()
    {

        $data = User::find(Auth::id());
        $details = Teacher::where('user_id', $data->id)->first();
        $details_user = User::where('id', $data->id)->first();
        $settings = SiteSettings::find(1);
        return view('backend.multi-dashboard.doctor.change_password', compact('details_user', 'details' , 'data', 'settings'));
    }

    public function FormPassChange(Request $request)
    {
        $this->validate($request,[
            'oldpassword' => 'required',
            'password' => 'confirmed'
        ]);

        $hashedPassword = Auth::User()->password;
        if(Hash::check($request->oldpassword,$hashedPassword))
        {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('success','Password Change Successfully!');
        } else {
            return redirect()->back()->with('errorMSG' ,  'Current Password Invalid!');
        }
    }
}

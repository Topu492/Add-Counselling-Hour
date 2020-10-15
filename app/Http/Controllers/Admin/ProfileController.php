<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Code start Here
    public function passChange()
    {
        $data = [ ];
        return view('backend.admin.admin_pass_change', $data);
    }

    public function passChangeReq(Request $request)
    {
        $this->validate($request,[
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::User()->password;
        if(Hash::check($request->oldpassword,$hashedPassword))
        {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('success','Password Change Succesfully!');
        } else {
            return redirect()->back()->with('errorMSG' ,  'Current Password Invalid!');
        }
    }
}

<?php

namespace App\Http\Controllers\Nurse;


use App\SiteSettings;
use App\User;
use App\Nurse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class NurseAuthController extends Controller
{
    //  code start here
    public function nurseSignUpForm()
    {
        $settings = SiteSettings::find(1);
        return view('auth.nurse_register', compact('settings'));
    }

    public function registerNurse(Request $request)
    {
        // Validation Need
        $request->validate([
            'name' => 'required|max:255|min:6',
            'username' => 'required|unique:users|min:4',
            'phn_number' => 'required|unique:users|min:11',
            'email' => 'unique:users|required',

        ]);

        $user_id = User::insertGetId([
            'role_id' => 3,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phn_number' => $request->phn_number,
            'created_at' => Carbon::now()
        ]);
//        if ($request->has('nid_card')){
//            $nid_pic = $request->file('nid_card')->store('nurse','public');
//        }
//        if ($request->has('reg_card')){
//            $bmdc_cer = $request->file('reg_card')->store('nurse','public');
//        }
        Nurse::create([
            'user_id' => $user_id,
            'area_name_id' => $request->area_name_id,
            'category_name_id' => $request->category_name_id,
//            'reg_card' => $reg_card,
//            'nid_card' => $nid_card,
            'student_id_number' => $request->student_id_number,

        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login');
        }

        return "Try Again! Mr/Mrs Student"; // error message
    }

    // Nurse Password Change
    public function changePasswordPage()
    {

        $data = User::find(Auth::id());
        $settings = SiteSettings::find(1);
        return view('backend.multi-dashboard.nurse.change_password_nurse', compact('data','settings'));
    }

    public function changePasswordAction(Request $request)
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

            return redirect()->route('login')->with('success','Password Change Successfully!');
        } else {
            return redirect()->back()->with('errorMSG' ,  'Current Password Invalid!');
        }
    }


}

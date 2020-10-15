<?php

namespace App\Http\Controllers;

use Auth;
use App\SiteSettings;
use App\User;
use App\Schedule;
use App\Teacher;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * @param User $profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show ($username)
    {
     //   return $username;
       // $data = [ ];
        $user =  User::whereUsername($username)->first();
        $details = Teacher::where('user_id', $user->username)->get();
        $settings = SiteSettings::find(1);




       if ($user){

        $schedules = Schedule::where('user_id', $user->id)->get();
            // User Exists
           return view('frontend.teacher_profile',compact('user','settings', 'details' ,'schedules' ));
       } else {
           // Return False
           dd($user);
       }
    }
}

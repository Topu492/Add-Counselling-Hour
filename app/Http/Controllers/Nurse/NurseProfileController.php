<?php

namespace App\Http\Controllers\Nurse;

use App\Nurse;
use App\SiteSettings;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NurseProfileController extends Controller
{
    // Code Start Here
    public function settings_page ()
    {
        $data = User::find(Auth::id());
        $details = Nurse::where('user_id', $data->id)->first();
        $details_user = User::where('id', $data->id)->first();
        $settings = SiteSettings::find(1);
        return view('backend.multi-dashboard.nurse._profile_settings', compact('data', 'details', 'details_user', 'settings'));
    }

    public function nurse_picUpdate(Request $request)
    {
        if($request->has('profile_pic')){
            // upload new image
            $image = $request->file('profile_pic')->store('nurse', 'public');

            // delete previous image
            Storage::delete('public/'.User::find(Auth::id())->profile_image);

            // insert image path to database
            User::find(Auth::id())->update([
                'profile_image'=> $image
            ]);
            return back();
        }
    }

    public function profile_update(Request $request)
    {
//        if($request->has('nid_card')){
            // upload new image
//            $image = $request->file('nid_card')->store('nid_chobi', 'public');

            // delete previous image
//            Storage::delete('public/'.User::find(Auth::id())->nid_card);
//        }
        $user_id = Auth::user()->id;
        User::where('id', Auth::id())->update([
            'name'=>$request->name,
            'phn_number'=>$request->phn_number,
        ]);

        Nurse::where('user_id', Auth::id())->update([
            'level'=>$request->level,
            'term'=>$request->term,
            'area_name_id'=>$request->area_name_id,
            'category_name_id'=>$request->category_name_id,
            'student_id_number'=>$request->student_id_number,
            'about_me'=>$request->about_me,
//            'nid_card' =>$image,
        ]);

        return back()->with('success', 'Student Profile Updated Successfully!');
    }


}

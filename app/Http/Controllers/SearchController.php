<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\SiteSettings;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    // code here ...

    public function search ()
    {
        $settings = SiteSettings::find(1);
        return view('frontend.searchpage', compact('settings'));
    }

    public function search_doctor(Request $request)
    {
        if ($request->category && $request->area){
            $query = [['category_name_id', $request->category], ['area_name_id', $request->area]];
        }elseif ($request->area){
            $query = [['area_name_id', $request->area]];
        }elseif ($request->category){
            $query = [['category_name_id', $request->category]];
        }else{
            $query = [['id', '!=', null]];
        }

        $doctors = Teacher::where($query)->get();
        $settings = SiteSettings::find(1);
        return view('frontend.search_doctor_profile' , compact('doctors','settings'));
    }
}

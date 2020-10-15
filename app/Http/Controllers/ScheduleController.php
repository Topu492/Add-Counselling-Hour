<?php

namespace App\Http\Controllers;

use App\User;
use App\Schedule;
use App\SiteSettings;
use App\Teacher;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        //
        $data = User::find(Auth::id());
        $details = Teacher::where('user_id', $data->id)->first();
        $details_user = User::where('id', $data->id)->first();
        $settings = SiteSettings::find(1);
        $schedules = Schedule::where('user_id', $data->id)->get();

        return view('backend.multi-dashboard.doctor._show_schedule' , compact('settings', 'data','details', 'details_user', 'schedules'));
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'day' => 'required|min:3|max:120',
        ]);

        $schedules = new Schedule();
        $schedules->day = $request->day;
        $schedules->user_id = auth()->user()->id;
        $schedules->time_start = $request->time_start;
        $schedules->time_end = $request->time_end;
        $schedules->which_topics = $request->which_topics;
        $schedules->save();

        session()->flash('success','Schedules Created Successfully!');
        return back();

    }


    public  function  delete($id)
    {
        $data = [ ];
        $data['schedules'] = Schedule::find($id);
        $data['schedules']->delete();
        session()->flash('success','Schedule Deleted Successfully!');
        return back();
    }

}

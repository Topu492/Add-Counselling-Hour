<?php

namespace App\Http\Controllers\Nurse;


use App\SiteSettings;
use App\User;
use Auth;
use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = User::find(Auth::id());
        $settings = SiteSettings::find(1);
        $bookings = Booking::where('user_id', Auth::id())->get();

       return view('backend.multi-dashboard.nurse._home_nurse', compact('data', 'settings', 'bookings'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Status;
use App\SiteSettings;
class TeacherBookingController extends Controller
{
    // start code
    public function index($id)
    {
        $data = [ ];
        $data['bookings'] = Booking::find($id);
        $data['settings'] = SiteSettings::find(1);
        return view('backend.multi-dashboard.doctor.change_status', $data);
    }

    public function teacherBookingControl (Request $request)
    {
        $bookings = Booking::findOrfail($request->id)->update([
            'status_id' => $request->status
        ]);

        session()->flash('success','Appointment Status Successfully Updated!');
        return redirect(route('doctor.dashboard'));
    }
}

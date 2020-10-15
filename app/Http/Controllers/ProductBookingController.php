<?php

namespace App\Http\Controllers;

use Auth;
use App\ProductBooking;
use App\SiteSettings;
use Illuminate\Http\Request;


class ProductBookingController extends Controller
{
    // Code Start Here
    public function productBooking ($id)
    {
        ProductBooking::create([
           'user_id' => Auth::id(),
           'product_id' => $id,
        ]);
        $data = [ ];
        $data['settings'] = SiteSettings::find(1);

        return view('frontend.product_booking_status', $data);
    }

    public function productbookingDelete ($id)
    {
        $data = [ ];
        $data['product_bookings'] = ProductBooking::find($id);
        $data['product_bookings']->delete();
        session()->flash('success','Product Booking Deleted Successfully!');
        return redirect(route('admin.dashboard', $data));
    }

    public function edit ($id)
    {
        $data = [ ];
        $data['product_bookings'] = ProductBooking::find($id);
        return view('backend.admin.edit_product_booking_status', $data);
    }

    public function update (Request $request)
    {
        $product_bookings = ProductBooking::findOrfail($request->id)->update([
            'status_name_id' => $request->status_name_id,
        ]);

        session()->flash('success','Successfully Updated!');
        return redirect(route('admin.dashboard'));
    }
}

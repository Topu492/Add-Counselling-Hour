<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\ContactForm;

class ContactFormController extends Controller
{
    // Code Start Here
    public function create ()
    {
        $settings = SiteSettings::find(1);
        return view('frontend.contact.create', compact('settings'));
    }

    public function store (Request $request)
    {
        $data = request()->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phn' =>  'required|min:6|max:15',
            'customer_address' => 'required|min:5',
            'customer_message' => 'required',
        ]);
        // dd($request->all());
        // Send An Email
        $mails = new ContactForm();
        $mails->customer_name = $request->customer_name;
        $mails->customer_email = $request->customer_email;
        $mails->customer_phn = $request->customer_phn;
        $mails->customer_address = $request->customer_address;
        $mails->customer_message = $request->customer_message;
        $mails->save();

       // Mail::to('info@amardoctor.com.bd')->send(new ContactFormMail($data));

        session()->flash('message', 'Thanks, For Your Message. We\'ll be in touch.');
        return redirect(route('contact.form'));
    }

    public function delete ($id)
    {
        $mail = ContactForm::find($id);
        $mail->delete();
        session()->flash('success','Nurse Service Booking Deleted!');
        return redirect(route('admin.dashboard'));
    }
}

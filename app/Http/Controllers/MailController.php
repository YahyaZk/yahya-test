<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::to('admin@gmail.com')->send(new TestMail());
        return'Done';
    }
    public function contact_us()
    {
       return view('forms.contact_us');
    }

    public function contact_us_data(Request $request)
    {

    $request->validate([
        // 'fname'=>'required',
        'lname'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'message'=>'required',
        'cv'=>'required',

    ]);

    $data = $request->except('_token');

    $cv_new_name = rand().time(). $request-> file('cv')->getClientOriginalName();

    $request->file('cv')->move(public_path('uploads'), $cv_new_name);
    $data['cv'] = $cv_new_name;


    Mail::to('contact@visionpluse.com')->send(new ContactUsMail ($data));

        return 'Sent';
    }

}

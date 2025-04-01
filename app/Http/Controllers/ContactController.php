<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use App\Mail\Enquiry;

class ContactController extends Controller
{  
    public function show()
    {
        return view('Tripjam/contact');
    }

    public function sendEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'messageContent' => 'required|min:5',
            
        ]);

        Contact::create ([
            'name' => $data['name'],
            'email' => $data['email'],
            'messageContent' => $data['messageContent'],
        ]);

        // dd('ok');

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry($data));
        // dd('Mail sent!');
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}

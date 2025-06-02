<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Mail\Message;
use Illuminate\Support\facades\Mail;

class ContactController extends Controller
{
    // public function send()
    // {
    //     Mail::to('monikamagar017gmail.com')->send(new ContactUsMail());
    //     return 'Email has been sent!';
    // }

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

        Contact::create($data);

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry($data));
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}

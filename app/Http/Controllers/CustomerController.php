<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $messages = Contact::all();
        return view('admin.pages.Customer.CustomerCare', compact('messages'));
    }
}

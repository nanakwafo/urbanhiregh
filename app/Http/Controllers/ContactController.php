<?php

namespace App\Http\Controllers;

use App\Mail\ContactusMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
        {
            Mail::to('nanamensah1140@gmail.com')->send(new  ContactusMail($request->contactemail,$request->contactname,$request->contactmessage));
            return redirect()->back()->with('flash_message','Thank you for your message .');
        }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    public function contact() {
        return view('index');
    }

    public function sendEmail(Request $request) {
         $details = [
             'name' => $request->name,
             'faculty' => $request->faculty,
             'phone' => $request->phone,
             'club' => $request->club,
             'message' => $request->message

         ];

         Mail::to('askarkyzy11@gmail.com')->send(new ContactMail($details));
         return back()->with('message_sent','Your message has been sent successfuly');
    }
}

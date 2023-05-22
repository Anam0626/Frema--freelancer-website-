<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        $validateData = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);

        $details = [
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'message' => $validateData['message']
        ];

        Mail::to('kinganam20@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your Message Has Been Sent');
    }
}

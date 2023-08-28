<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormEmail;


class EmailController extends Controller{
public function sendEmail(Request $request)
{ 
    $name= $request->input("name");
    $senderEmail = $request->input("email");
    $subject = $request->input("subject");
    $message = $request->input("message");

   

    $mailable = new ContactFormEmail($name,$message, $subject, $senderEmail);
    
    Mail::to("cis-003-18@must.ac.mw")->send($mailable);

    //return view('emails.contact-form', compact('message', 'subject'));

     return response()->json(['message' => 'Email sent successfully'], 200);
}
}




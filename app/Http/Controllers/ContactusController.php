<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class ContactusController extends Controller
{
    public function addcontact(Request $request){
        //  dd("hello");
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Send email
        Mail::send( [], [], function($messages) use ($name, $email, $subject, $message) {
            $messages->to('pkeatyush@gmail.com')
                    ->subject($subject)
                    ->setBody("Name: $name\nEmail: $email\n\n$message");
        });
    }
}

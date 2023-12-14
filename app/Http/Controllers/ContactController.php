<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;






class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');


    }
    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);



       // Assuming you have a Mailable class named ContactFormSubmitted
    Mail::to('rizkyalamsyah.dev@gmail.com')->send(new ContactFormMail($data));


        // Optionally, you can add a success message or redirect the user
        return back()->with('success', 'Message sent successfully!');
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactUsC(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ], [
            'name.required' => 'Your Name Please !',
            'email.required' => 'Your Email Please !',
            'email.email' => 'Valide Email Please !',
            'message.required' => 'Message Please !',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return view('home.home');
    }
}

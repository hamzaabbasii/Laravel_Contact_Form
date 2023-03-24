<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
     public function index()
    {
        return view('contact');
    }
    public function send(Request $request)
{
    $contact = new Contact();
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->phone = $request->input('phone');
    $contact->query = $request->input('query');
    $contact->save();

    return redirect('/contact')->with('success', 'Your message has been sent successfully.');
}
}

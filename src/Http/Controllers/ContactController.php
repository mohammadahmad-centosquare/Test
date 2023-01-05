<?php

namespace Ahmad\Contact\Http\Controllers;

use Ahmad\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Ahmad\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()

    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to($request->email)->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}

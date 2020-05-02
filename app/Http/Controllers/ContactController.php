<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:64'],
            'email' => ['required', 'email', 'string', 'min:3', 'max:256'],
            'subject' => ['required', 'string', 'min:3', 'max:256'],
            'message' => ['required', 'string'],
        ]);

        $contact = Contact::create($data);

        $request->session()->flash('success_message', 'Contact sent wait for feedback');

        return back();
    }
}

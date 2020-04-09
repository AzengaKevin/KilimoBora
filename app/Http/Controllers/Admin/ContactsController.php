<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {

        $contact->delete();

        return back();
    }
}

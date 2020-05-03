<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $members = Member::latest()->get();

        return view('pages.about', compact('members'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function products()
    {
        return view('pages.products');
    }
     public function history()
    {
        return view('pages.history');
    }
    public function vision()
    {
        return view('pages.vision');
    }
    public function core()
    {
        return view('pages.core');
    }
}

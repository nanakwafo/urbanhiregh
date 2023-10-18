<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about(){
        return view('aboutus');
    }
    public function privacy_policy(){
        return view('privacy-policy');
    }
    public function terms(){
        return view('terms');
    }
    public function contact_us(){
        return view('contact-us');
    }
    public function faq(){
        return view('faq');
    }
}

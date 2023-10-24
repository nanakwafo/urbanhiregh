<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequesterController extends Controller
{
    //
    public function index(){
        return view('requester.requester-profile');
    }
}

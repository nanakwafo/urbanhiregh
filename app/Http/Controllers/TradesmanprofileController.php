<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradesmanprofileController extends Controller
{
    //
    public function index(){
        return view('tradesman.tradesman-profile');
    }
}

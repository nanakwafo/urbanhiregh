<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradesmanController extends Controller
{
    //
    public function index(Request $request){
        return view('tradesmen');
    }
}

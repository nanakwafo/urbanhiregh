<?php

namespace App\Http\Controllers;

// use App\TradesmanProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



// use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

                $uniqueTrades = DB::table('users')->distinct()->pluck('trade');
        $uniqueLocations = DB::table('users')->distinct()->pluck('location');

        return view('welcome', [
            'uniqueTrades' => $uniqueTrades,
            'uniqueLocations' => $uniqueLocations
        ]);


        // return view('welcome');
    }
}

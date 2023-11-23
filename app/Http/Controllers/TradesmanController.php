<?php

namespace App\Http\Controllers;

use App\TradesmanProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TradesmanController extends Controller
{
    //
    public function index(Request $request){

        $tradesmenprofiles  = DB::table('users')
                    ->join('tradesman_profiles', 'users.id', '=', 'tradesman_profiles.user_id')
                    ->select('users.*', 'tradesman_profiles.*')
                    ->get();
//dd($tradesmenprofiles);
        return view('tradesmen',[
            'tradesmenprofiles' =>  $tradesmenprofiles,

        ]);
    }
}

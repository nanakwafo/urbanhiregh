<?php

namespace App\Http\Controllers;

use App\TradesmanProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TradesmanController extends Controller
{
    //
    public function index(Request $request)
    {
        $searchText = $request->input('tradeSearch');
        if (!is_null($searchText)) {
            $tradesmenprofiles = DB::table('users')
                ->join('tradesman_profiles', 'users.id', '=', 'tradesman_profiles.user_id')
                ->select('users.*', 'tradesman_profiles.*')
                ->where('users.trade', '=', $searchText)
                ->get();
        }
        $tradesmenprofiles = DB::table('users')
            ->join('tradesman_profiles', 'users.id', '=', 'tradesman_profiles.user_id')
            ->select('users.*', 'tradesman_profiles.*')
            ->get();


        return view('tradesmen', [
            'tradesmenprofiles' => $tradesmenprofiles,
        ]);
    }

}

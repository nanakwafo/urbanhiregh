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
        $location = $request->input('location');
        $pageNumber=$request->input('pageNumber');

        // var_dump($searchText ."==" .$location); die;

        // `users`.`location`
         $uniqueTrades = DB::table('users')->distinct()->pluck('trade');
        $uniqueLocations = DB::table('users')->distinct()->pluck('location');

        if (!is_null($searchText) && !is_null($location)) {
            $tradesmenprofiles = DB::table('users')
                ->join('tradesman_profiles', 'users.id', '=', 'tradesman_profiles.user_id')
                ->select('users.*', 'tradesman_profiles.*')
                ->where('users.trade', '=', $searchText)
                 ->where('users.location', '=', $location)
                ->paginate(2*$pageNumber);
            return view('tradesmen', [
                'tradesmenprofiles' => $tradesmenprofiles,
                'uniqueTrades' => $uniqueTrades,
            'uniqueLocations' => $uniqueLocations,
            'searchText'=>$searchText,
            'location'=>$location,
            'pageNumber'=>$pageNumber+1
            ]);


        }else{
            $tradesmenprofiles = DB::table('users')
            ->join('tradesman_profiles', 'users.id', '=', 'tradesman_profiles.user_id')
            ->select('users.*', 'tradesman_profiles.*')
            ->where('users.trade', '=', $searchText)
            ->where('users.location', '=', $location)
            ->get();
             return view('tradesmen', [
            'tradesmenprofiles' => $tradesmenprofiles,
            'uniqueTrades' => $uniqueTrades,
            'uniqueLocations' => $uniqueLocations,
            'searchText'=>$searchText,
            'location'=>$location,
            'pageNumber'=>$pageNumber+1
        ]);


        }
        

       


 // var_dump($uniqueTrades ."==" .$uniqueLocations); die;


       

    }

}

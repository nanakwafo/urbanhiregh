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

    $tradesmenprofiles = DB::table('tradesman_profiles')
        ->where('skills', '=', $searchText)
        ->get();

    return view('tradesmen', [
        'tradesmenprofiles' => $tradesmenprofiles,
    ]);
}

}

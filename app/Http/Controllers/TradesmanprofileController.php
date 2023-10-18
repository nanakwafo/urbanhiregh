<?php

namespace App\Http\Controllers;

use App\TradesmanEducation;
use App\TradesmanProfile;
use Illuminate\Http\Request;

class TradesmanprofileController extends Controller
{
    //
    public function index(){
        return view('tradesman.tradesman-profile');
    }

    public function save_profile(Request $request){
        $tradesmanprofile = new TradesmanProfile();
        $tradesmanprofile->picture =$request->picture;
        $tradesmanprofile->name = $request->name;
        $tradesmanprofile->about = $request->about;
        $tradesmanprofile->skills = $request->skills;
        $tradesmanprofile->location = $request->location;
        $tradesmanprofile->home_address = $request->home_address;
        $tradesmanprofile->phone = $request->phone;
        $tradesmanprofile->email = $request->email;

    }
    public function save_education(Request $request){
        $tradesmanprofile = new TradesmanEducation();
        $tradesmanprofile->title =$request->title;
        $tradesmanprofile->institution = $request->institution;
        $tradesmanprofile->period = $request->period;


    }
    public function update_profile(){

    }
    public function update_education(){

    }
}

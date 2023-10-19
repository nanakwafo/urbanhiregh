<?php

namespace App\Http\Controllers;

use App\TradesmanEducation;
use App\TradesmanExperience;
use App\TradesmanProfile;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

class TradesmanprofileController extends Controller
{
    //
    public function index($userId){
               $user=             EloquentUser::find($userId);
        $tradesmanprofile = TradesmanProfile::where('user_id',$userId)->get()->first();
        $tradesmaneducation = TradesmanEducation::where('user_id',$userId)->get()->first();
        $tradesmanexperience = TradesmanExperience::where('user_id',$userId)->get()->first();

        return view('tradesman.tradesman-profile' ,[
                               'tradesmanprofile' => $tradesmanprofile,
                               'tradesmaneducation' => $tradesmaneducation,
                               'tradesmanexperience' => $tradesmanexperience,
            'user'=>$user

        ]);
    }
    public function update_tradesman_profile($userId){
        $tradesmanprofile = TradesmanProfile::where('user_id',$userId)->get()->first();
        $tradesmaneducation = TradesmanEducation::where('user_id',$userId)->get()->first();
        $tradesmanexperience = TradesmanExperience::where('user_id',$userId)->get()->first();
        return view('tradesman.update-tradesman-profile' ,[
            'tradesmanprofile' => $tradesmanprofile,
            'user_id' => $userId,
            'tradesmaneducation' => $tradesmaneducation,
            'tradesmanexperience' => $tradesmanexperience

        ]);
    }

    public function update_profile_picture(Request $request)
    {

        $profilepicture = TradesmanProfile::where('user_id', $request->user_id)->get()->first();

        if (!empty($profilepicture)) {
            if ($request->hasFile('picture')) {

                $picture = $request->file('picture');
                $filename = time() . '.' . $picture->getClientOriginalExtension();

                $profile = TradesmanProfile::where('user_id',$request->user_id)->get()->first();;

                $profile->picture = $filename;
                $profile->update();
                try {

                    Image::make($picture)->resize(300, 300)->save(public_path('/uploads/' . $filename));
                    return redirect()->back()->with(['success' => 'Your Picture has been updated']);
                }catch (\Exception $exception){
                    dd($exception);
                }



            }else{
                return redirect()->back()->with(['error' => 'File too large.Please select a smaller picture']);
            }

        }


    }



    public function update_profile_details(Request $request){

        $tradesmanprofile = TradesmanProfile::where('user_id',$request->user_id)->get()->first();
        $tradesmanprofile->about = $request->about;
        $tradesmanprofile->skills = $request->skills;
        $tradesmanprofile->location = $request->location;
        $tradesmanprofile->home_address = $request->home_address;
        $tradesmanprofile->phone = $request->phone;
        $tradesmanprofile->update();
        return redirect()->back()->with(['success' => 'Your details has been updated']);

    }


    public function update_education_details(Request $request){

        $tradesmaneduction = TradesmanEducation::where('user_id',$request->user_id)->get()->first();
        $tradesmaneduction->title =$request->title;
        $tradesmaneduction->institution_name = $request->institution_name;
        $tradesmaneduction->start_period = $request->start_period;
        $tradesmaneduction->end_period = $request->end_period;
        $tradesmaneduction->update();

        return redirect()->back()->with(['success' => 'Your Educational details has been updated']);
    }
    public function update_experience(Request $request){

        $tradesmaneduction = TradesmanExperience::where('user_id',$request->user_id)->get()->first();
        $tradesmaneduction->position =$request->position;
        $tradesmaneduction->organisation_name = $request->organisation_name;
        $tradesmaneduction->organisation_location = $request->organisation_location;
        $tradesmaneduction->description = $request->description;
        $tradesmaneduction->start_period = $request->start_period;
        $tradesmaneduction->end_period = $request->end_period;
        $tradesmaneduction->update();

        return redirect()->back()->with(['success' => 'Your Experience details has been updated']);

    }
    public function update_education(){

    }
}

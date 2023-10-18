<?php

namespace App\Http\Controllers;

use App\TradesmanEducation;
use App\TradesmanProfile;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

class TradesmanprofileController extends Controller
{
    //
    public function index($userId){

        $tradesmanprofile = TradesmanProfile::where('user_id',$userId)->get()->first();

        return view('tradesman.tradesman-profile' ,[
                               'tradesmanprofile' => $tradesmanprofile,

        ]);
    }
    public function update_tradesman_profile($userId){
        $tradesmanprofile = TradesmanProfile::where('user_id',$userId)->get()->first();

        return view('tradesman.update-tradesman-profile' ,[
            'tradesmanprofile' => $tradesmanprofile,
            'user_id' => $userId,

        ]);
    }

    public function update_profile_picture(Request $request)
    {

        $profilepicture = TradesmanProfile::where('user_id', $request->user_id)->get()->first();

        if (!empty($profilepicture)) {
            if ($request->hasFile('picture')) {

                $picture = $request->file('picture');
                $filename = time() . '.' . $picture->getClientOriginalExtension();

                $profile = TradesmanProfile::findorfail($request->user_id);

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

        $tradesmanprofile = TradesmanProfile::findorfail($request->user_id);
        $tradesmanprofile->about = $request->about;
        $tradesmanprofile->skills = $request->skills;
        $tradesmanprofile->location = $request->location;
        $tradesmanprofile->home_address = $request->home_address;
        $tradesmanprofile->phone = $request->phone;
        $tradesmanprofile->update();
        return redirect()->back()->with(['success' => 'Your details has been updated']);

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

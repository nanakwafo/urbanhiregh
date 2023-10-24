<?php

namespace App\Http\Controllers;

use App\Job;
use App\TradesmanEducation;
use App\TradesmanExperience;
use App\TradesmanProfile;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function available_jobs($userId){

        $user=  EloquentUser::find($userId);
        $tradesmanprofile = TradesmanProfile::where('user_id',$userId)->get()->first();
        $tradesmaneducation = TradesmanEducation::where('user_id',$userId)->get()->first();
        $tradesmanexperience = TradesmanExperience::where('user_id',$userId)->get()->first();

        return view('tradesman.available-jobs' ,[
            'tradesmanprofile' => $tradesmanprofile,
            'tradesmaneducation' => $tradesmaneducation,
            'tradesmanexperience' => $tradesmanexperience,
            'user'=>$user

        ]);


    }
    public function completed_jobs($userId){

        $user=  EloquentUser::find($userId);
        $tradesmanprofile = TradesmanProfile::where('user_id',$userId)->get()->first();
        $tradesmaneducation = TradesmanEducation::where('user_id',$userId)->get()->first();
        $tradesmanexperience = TradesmanExperience::where('user_id',$userId)->get()->first();

        return view('tradesman.completed-jobs' ,[
            'tradesmanprofile' => $tradesmanprofile,
            'tradesmaneducation' => $tradesmaneducation,
            'tradesmanexperience' => $tradesmanexperience,
            'user'=>$user

        ]);

    }

    public function post_a_Job_trade(){
         return view('requester.job_trade');
    }
    public function post_trade_job(Request $request){
        if($request->email === null){
            return view('requester.describe_job',[
                'trade' => $request->trade,

            ]);

        }else{
//            dd($request->all());
            //check if email exist
          if(  EloquentUser::where('email',$request->email)->get()->first() === null){//user does not exit
             //store data in cookie and redirect to register page
              return view('register',[
                  'email' => $request->email,
                  'location' => $request->location,
              ]);
          }else{
              return view('login',[
                  'email' => $request->email,
              ]);
          }
        }


    }
    public function post_a_job(Request $request){
        $jobpost = new Job();
        $jobpost->requestid  = $request->requestid;
        $jobpost->requesttype  = $request->requesttype;
        $jobpost->post_date  = $request->post_date;
        $jobpost->house_number  = $request->house_number;
        $jobpost->location  = $request->location;
        $jobpost->job_title  = $request->job_title;
        $jobpost->job_description  = $request->job_description;
        $jobpost->job_notes  = $request->job_notes;
        $jobpost->status  = $request->status;

        $jobpost->save();

        //status    =reviewing Awaiting-review looking for the nearest trademan  assigned  completed aborted
    }

}

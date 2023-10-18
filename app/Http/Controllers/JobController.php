<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function available_jobs(){
        return view('tradesman.available-jobs');

    }
    public function completed_jobs(){
        return view('tradesman.completed-jobs');
    }

    public function post_a_job(Request $request){
        $jobpost = new Job();
        $jobpost->requestid  = $request->requestid;
        $jobpost->requesttype  = $request->requesttype;
        $jobpost->post_date  = $request->post_date;
        $jobpost->house_number  = $request->house_number;
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

<?php

namespace App\Http\Controllers;

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
}

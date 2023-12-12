<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function index($job_id, $homeowner_id, $tradesman_id)
    {

        return view('payment.payment', []);
    }

    public function save()
    {

    }
}

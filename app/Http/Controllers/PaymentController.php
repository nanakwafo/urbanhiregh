<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Facades\Paystack;

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
    public function redirectToGateway(Request $request){

    }
}

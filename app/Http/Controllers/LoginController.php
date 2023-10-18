<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
//        return view('tradesman');
        return view('requester');
    }

    private function get_user_type($email)
    {
        return 'tradesman | requester';
    }
}

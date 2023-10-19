<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Activation;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class Activationcontroller extends Controller
{
    //
    public function activate($email, $activationCode)
    {
        try {
            $credentials = [
                'login' => $email,
            ];
            $user = Sentinel::findByCredentials($credentials);
            if (Activation::complete($user, $activationCode)) {
                return redirect()->route('loginaccount');
            } else {
                if ($activation = Activation::completed($user))
                {
                    return redirect()->route('loginaccount');
                }
            }
        } catch (\Exception $exception) {
            return $exception;
        }


    }
}

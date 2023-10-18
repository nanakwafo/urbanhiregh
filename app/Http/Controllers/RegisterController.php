<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {


        $this->validate($request,[
            'user_type'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'phone_number'=>'required',
            'location'=>'required',
            'email'=>'unique:users|required|email',
            'password'=>'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation'=>'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);

        $credentials = [
            'user_type'    => $request->user_type,
            'firstname' => $request->firstname,
            'lastname'=> $request->lastname,
            'phone_number'=> $request->phone_number,
            'location'=> $request->location,
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        $user = Sentinel::register($credentials);

        $activation = Activation::create($user);
        if($request->user_type === 'requester'){
            $role = Sentinel::findRoleBySlug('requester');
        }
        if($request->user_type === 'tradesman'){
            $role = Sentinel::findRoleBySlug('tradesman');
        }

        $role->users()->attach($user);


//
//        /*************Send Acytivation MAil**********/
//        $this->sendActivationMail($request->email,$activation->code);
//
        return redirect()->back()->with(['success'=>'An activation link was sent to your email Address']);

    }
}

<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Native\Facades\Sentinel;
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

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',

        ]);

        try{
            $credentials = [
                'email'    => trim($request['email']),
                'password' => trim($request['password']),
            ];
            if(Sentinel::authenticate($credentials)){
                if(Sentinel::getUser()->roles()->first()->slug =='tradesman') {
//

                    return redirect('tradesmanprofile/' . Sentinel::getUser()->id);
                }
                if(Sentinel::getUser()->roles()->first()->slug =='requester') {

                    return redirect('requesterdashboard/' . Sentinel::getUser()->id);
                }
            }else
            {
                return redirect()->back()->with(['error'=>'Wrong Email or Password']);
            }
        }catch(ThrottlingException $e){
            $delay=$e->getDelay();
            return redirect()->back()->with(['error'=>"You are banned for $delay seconds."]);

        }catch (NotActivatedException $e){
            return redirect()->back()->with(['error'=>"Your account has not been activated"]);
        }

    }


}

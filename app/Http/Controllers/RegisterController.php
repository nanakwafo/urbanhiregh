<?php

namespace App\Http\Controllers;

use App\Home_owners;
use App\TradesmanEducation;
use App\TradesmanExperience;
use App\TradesmanProfile;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationMail;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    //
    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {

        $this->validate($request, [
            'user_type' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'location' => 'required',
            'email' => 'unique:users|required|email',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ]);


        $credentials = [
            'user_type' => $request->user_type,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'email' => $request->email,
            'password' => $request->password,
            'trade' => $request->trade
        ];


        $user = Sentinel::register($credentials);


        $activation = Activation::create($user);
        if ($request->user_type === 'requester') {
            $this->add_to_requesterprofile($user);
            $role = Sentinel::findRoleBySlug('requester');
        }
        if ($request->user_type === 'tradesman') {

            $this->add_to_profile($user);
            $this->add_to_education($user);
            $this->add_to_experience($user);

            $role = Sentinel::findRoleBySlug('tradesman');
        }

        $role->users()->attach($user);
        $this->sendActivationMail($request->email, $activation->code);
        return redirect()->back()->with(['success' => 'An activation link was sent to your email Address']);


    }
    private function add_to_requesterprofile(\Cartalyst\Sentinel\Users\UserInterface $user){

        $requesterprofile = new Home_owners();
        $requesterprofile->last_name = $user->last_name;
        $requesterprofile->first_name = $user->first_name;
//        $requesterprofile->email = $user->email;
        $requesterprofile->phone_number1 = $user->phone_number;
        $requesterprofile->address = $user->location;

        $requesterprofile->save();
    }
    /**
     * @param \Cartalyst\Sentinel\Users\UserInterface $user
     */
    private function add_to_profile(\Cartalyst\Sentinel\Users\UserInterface $user)
    {
        $trademanprofile = new TradesmanProfile();
        $trademanprofile->user_id = $user->id;
        $trademanprofile->name = $user->firstname . " " . $user->lastname;
        $trademanprofile->phone = $user->phone_number;
        $trademanprofile->location = $user->location;
        $trademanprofile->email = $user->email;
        $trademanprofile->save();
    }

    /**
     * @param \Cartalyst\Sentinel\Users\UserInterface $user
     */
    private function add_to_education(\Cartalyst\Sentinel\Users\UserInterface $user)
    {
        $trademaneducation = new TradesmanEducation();
        $trademaneducation->user_id = $user->id;
        $trademaneducation->title = null;
        $trademaneducation->institution_name = null;
        $trademaneducation->start_period = null;
        $trademaneducation->end_period = null;
        $trademaneducation->save();


    }


    /**
     * @param \Cartalyst\Sentinel\Users\UserInterface $user
     */
    private function add_to_experience(\Cartalyst\Sentinel\Users\UserInterface $user)
    {


        $trademaneducation = new TradesmanExperience();
        $trademaneducation->user_id = $user->id;
        $trademaneducation->position = null;
        $trademaneducation->organisation_name = null;
        $trademaneducation->organisation_location = null;
        $trademaneducation->description = null;
        $trademaneducation->start_period = null;
        $trademaneducation->end_period = null;
        $trademaneducation->save();


    }
    ///////////////////////////////////////////////////
    ///// Send email activationmail////////////////////
    ///////////////////////////////////////////////////
    public function sendActivationMail($email, $code)
    {
        Mail::to($email)->send(new ActivationMail($code, $email));
    }


}




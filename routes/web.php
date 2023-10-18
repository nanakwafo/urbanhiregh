<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
//About Us
Route::get('/about-us', 'PageController@about');
//Privacy policy
Route::get('/privacy-policy', 'PageController@privacy_policy');
//Terms
Route::get('/terms', 'PageController@terms');
//Contact Us
Route::get('/contact-us', 'PageController@contact_us');
//Faq
Route::get('/faq', 'PageController@faq');


Route::post('/logout','LoginController@logout');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postlogin');

Route::get('/register', 'RegisterController@register');
Route::post('register', 'RegisterController@postregister');

Route::get('/forgot-password', 'ForgotPasswordcontroller@index');

//tradesman profile
Route::get('/tradesmanprofile/{userId}', 'TradesmanprofileController@index');

Route::get('/update-tradesmanprofile/{userId}', 'TradesmanprofileController@update_tradesman_profile');
Route::post('/update-tradesmanprofile-picture', 'TradesmanprofileController@update_profile_picture');
Route::post('/update_profile_details', 'TradesmanprofileController@update_profile_details');



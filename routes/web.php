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
use App\Http\Controllers\Requester\RequesterController;

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

//Route::middleware(['visitor'])->group(function () {
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

    //How it -works
    Route::get('/how-it-works', 'How_it_works_Controller@index');
    //Equipment tools
    Route::get('/equipment-tools', 'EquipmentController@index');
    //Reviews
    Route::post('/review', 'ReviewController@index');


    Route::any('/viewtradesmen', 'TradesmanController@index');
     Route::post('/viewtradesmenLoadMore', 'TradesmanController@loadMore');



     // Route::any('/viewtradesmen/{searchText}', 'TradesmanController@index');
    //Register
    Route::get('/register', 'RegisterController@register');
    Route::post('register', 'RegisterController@postregister');

    //Login
    Route::get('/login', 'LoginController@login');
    Route::post('/login', 'LoginController@postlogin');

    //Forgot Password
    Route::get('/forgot-password', 'ForgotPasswordcontroller@index');

    //Logout
    Route::post('/logout', 'LoginController@logout');
//});




Route::get('/tradesmanprofile/{userId}', 'TradesmanprofileController@index')->middleware('tradesmen');
Route::get('/update-tradesmanprofile/{userId}', 'TradesmanprofileController@update_tradesman_profile')->middleware('tradesmen');
Route::post('/update-tradesmanprofile-picture', 'TradesmanprofileController@update_profile_picture')->middleware('tradesmen');
Route::post('/update_profile_details', 'TradesmanprofileoCntroller@update_profile_details')->middleware('tradesmen');
Route::post('/update_education_details', 'TradesmanprofileController@update_education_details')->middleware('tradesmen');
Route::post('/update_experience', 'TradesmanprofileController@update_experience')->middleware('tradesmen');



Route::get('/requesterprofile/{userId}', 'RequesterController@index');

Route::get('/requester-profile', 'Requester\RequesterController@index');
Route::get('/requester-security', 'Requester\RequesterController@Security');

Route::get('/requester-properties', 'Requester\RequesterController@properties');
Route::get('/requester-history', 'Requester\RequesterController@history');
Route::get('/requester-payments', 'Requester\RequesterController@payments');

Route::get('/requester-request', 'Requester\RequesterController@Request');

Route::get('/requester-add-property', 'Requester\RequesterController@addproperty');

Route::post('/requester-update-home-owner-profile', 'Requester\RequesterController@updateHomeOwnerProfile');
Route::post('/requester-add-home-owner-property', 'Requester\RequesterController@newproperty');


Route::get('/requester-edit-property/{propertyId}', 'Requester\RequesterController@Editproperty');

Route::post('/requester-editing-property', 'Requester\RequesterController@editingproperty');


Route::post('/requester-add-request', 'Requester\RequesterController@newRequest');

Route::get('/requester-view-request/{id}', 'Requester\RequesterController@RequestView');

Route::post('/requester-remove-property', 'Requester\RequesterController@deleteproperty');
Route::post('/requester-remove-request', 'Requester\RequesterController@deleterequest');




Route::get('/available_jobs/{userId}', 'JobController@available_jobs')->middleware('tradesmen');
Route::get('/completed_jobs/{userId}', 'JobController@completed_jobs')->middleware('tradesmen');
Route::get('/post_a_Job_trade', 'JobController@post_a_Job_trade');
Route::post('/post_trade_job', 'JobController@post_trade_job');











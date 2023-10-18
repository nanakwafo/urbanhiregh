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

Route::post('/logout','LoginController@logout');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postlogin');

Route::get('/register', 'RegisterController@register');
Route::post('register', 'RegisterController@postregister');

Route::get('/forgot-password', 'ForgotPasswordcontroller@index');

//tradesman profile
Route::get('/tradesmanprofile/{userId}', 'TradesmanprofileController@index');



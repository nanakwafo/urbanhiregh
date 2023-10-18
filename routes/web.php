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


Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postlogin');

Route::get('/register', 'RegisterController@register');
Route::post('register', 'RegisterController@postregister');


//tradesman profile
Route::get('/tradesmanprofile/{userId}', 'TradesmanprofileController@index');

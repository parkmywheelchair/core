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

Route::get('/', function () {
    if (Auth::guest())
        return redirect()->route('welcome');
    return redirect()->route('home');
});

Auth::routes();

Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/redirect', 'SocialAuthFacebookController@redirect');
Route::get('login/callback', 'SocialAuthFacebookController@callback');

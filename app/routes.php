<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::resource('/','IndexController', [ 'only' => [ 'index']]);

Route::get('/logout', function() {
    Auth::logout();
    Session::flush();
    return Redirect::to('/login');
});
Route::resource('success', 'SuccessController', [ 'only' => [ 'index']]);
Route::resource('login', 'LoginController', [ 'only' => [ 'index', 'store', 'destroy']]);
Route::resource('signup', 'SignupController', [ 'only' => [ 'index', 'store', 'success']]);

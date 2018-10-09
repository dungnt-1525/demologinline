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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//line
Route::get('login/line', 'SocialController@redirect');
Route::get('login/line/callback', 'SocialController@callback');

//ig
Route::get('login/instagrms', 'InstagrmController@InstagrmFeed');
//Route::get('login/instagrms/callback', 'SocialController@callback');



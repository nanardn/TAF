<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('auth.login');
});
Route::auth();

//Halaman Welcome
Route::get('/home', 'HomeController@index');
//laporan bulanan
Route::get('/dashboard/showReportPendanaan','crowdController@listReportCrowd');
Route::get('/dashboard/pendanaan/{id}','crowdController@index');
Route::get('/dashboard/showReportCrowdfunding','crowdController@showReport');



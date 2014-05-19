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

Route::get('/', 'HomeController@index');
Route::get('/projects/', 'HomeController@projects');
Route::get('/resume/', 'HomeController@resume');
Route::get('/contact/', 'HomeController@contact');
Route::get('/contact/sent/', 'HomeController@contact_sent');
Route::get('/email/', 'MailController@email');

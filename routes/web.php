<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/formation', 'FormationController@index');
Route::get('/competence', 'CompetenceController@index');
Route::get('/projet', 'ProjetController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact/mail', 'ContactController@send');

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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/', 'HomeController@showHome');


Route::get('wine', 'ProductController@showWineGlasses');


Route::get('tumblers', 'ProductController@showTumblers');


Route::get('vinylShirts', 'ProductController@showVinylShirts');


Route::get('autismAwareness', 'ProductController@showAutismAwareness');


Route::get('teacher', 'ProductController@showTeacherAppreciation');


Route::get('spirit', 'ProductController@showSchoolSpirit');





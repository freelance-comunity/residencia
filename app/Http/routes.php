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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/testing', function(){
	return view('front-end.index');
});

Route::get('/graduates', function(){
	return view('front-end.graduates');
});

Route::get('/company', function(){
	return view('front-end.company');
});

Route::get('/projects', function(){
	return view('front-end.projects');
});

Route::get('/organization', function(){
	return view('front-end.organization');
});

Route::get('/academic', function(){
	return view('front-end.academic');
});


Route::resource('graduates', 'GraduateController');

Route::get('graduates/{id}/delete', [
    'as' => 'graduates.delete',
    'uses' => 'GraduateController@destroy',
]);

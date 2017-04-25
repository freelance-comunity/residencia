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

Route::get('/testing', function(){
    $role = App\Role::where('name', 'graduate')->first();
    echo $role->id;
});

Route::get('/roles', function() {
    $owner = new App\Role();
    $owner->name         = 'coordinador';
    $owner->display_name = 'Usuario Coordinador'; // optional
    $owner->description  = 'Coordinador del sistema con todos los privilegios'; // optional
    $owner->save();

    $admin = new App\Role();
    $admin->name         = 'graduate';
    $admin->display_name = 'Usuario Egresado'; // optional
    $admin->description  = 'Egresado el cual hara uso de los servicios de SEDSC'; // optional
    $admin->save();

    $admin = new App\Role();
    $admin->name         = 'company';
    $admin->display_name = 'Usuario Empresa'; // optional
    $admin->description  = 'Empresa la cual podra publicar sus vacantes en SEDSC'; // optional
    $admin->save();
    echo "Listo";
});
/*============== Main Routes ==============*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register-graduate', function(){
    return view('auth.register-graduate');
});

Route::get('/register-company', function(){
    return view('auth.register-company');
});

Route::auth();

Route::get('/home', 'HomeController@index');

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

 Route::get('/viewdata/{id}', 'GraduateController@data');

 Route::get('graduates/{id}/delete', [
    'as' => 'graduates.delete',
    'uses' => 'GraduateController@destroy',

    ]);

 Route::resource('companies', 'CompanyController');

 Route::get('companies/{id}/delete', [
    'as' => 'companies.delete',
    'uses' => 'CompanyController@destroy',
    ]);
/*============== End Main Routes ==============*/
Route::group(['middleware' => 'auth'], function(){

 Route::resource('labors', 'LaborController');

 Route::get('labors/{id}/delete', [
    'as' => 'labors.delete',
    'uses' => 'LaborController@destroy',
    ]);


 Route::resource('vacancies', 'VacancyController');

 Route::get('vacancies/{id}/delete', [
    'as' => 'vacancies.delete',
    'uses' => 'VacancyController@destroy',
    ]);

 Route::get('vacancyphoto', 'VacancyController@vacancyphoto');


 Route::resource('residents', 'ResidentsController');

 Route::get('residents/{id}/delete', [
    'as' => 'residents.delete',
    'uses' => 'ResidentsController@destroy',
    ]);


 Route::resource('services', 'ServiceController');

 Route::get('services/{id}/delete', [
    'as' => 'services.delete',
    'uses' => 'ServiceController@destroy',
    ]);
});





Route::resource('polls', 'PollController');

Route::get('polls/{id}/delete', [
    'as' => 'polls.delete',
    'uses' => 'PollController@destroy',
]);

/*============== Administrator ==============*/
/*
* Module Graduate for Administrator
*/
Route::get('allgraduates', 'AdminController@graduates');
Route::get('create-graduate', 'AdminController@createGraduate');
Route::post('create-graduate', 'AdminController@storeGraduate');


Route::get('allcompanies', 'AdminController@companies');
Route::get('create-company', 'AdminController@createCompany');
Route::post('create-company', 'AdminController@storeCompany');

Route::get('allservices', 'AdminController@services');
Route::get('allresidents', 'AdminController@residents');
Route::get('allvacancies', 'AdminController@vacancies');
/*
** Routes Chat
*/
Route::get('adminchat', function() {
    $role = App\Role::where('name', 'coordinador')->first();
    $users = $role->users; 
    return view('chat.users')
    ->with('users', $users);
});

Route::get('chatgraduates', function() {
    $role = App\Role::where('name', 'graduate')->first();
    $users = $role->users; 
    return view('chat.users')
    ->with('users', $users);
});

Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');

Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
   Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
   Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});

<?php

Route::get('/testing', function(){
    $questions = App\Models\Survey_q::all();
    foreach ($questions as $question) {
        echo $question->q_text;
        echo "<br>";
        if ($question->q_format == "SELECTED") {
            $options = $question->options;
            foreach ($options as $option) {
                echo $option->o_text;
                echo "<br>";
            }
        }
    }
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
    

    $admin = new App\Role();
    $admin->name         = 'teacher';
    $admin->display_name = 'Usuario Docente'; // optional
    $admin->description  = 'Docente el cual podra publicar sus proyectos en SEDSC'; // optional
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

Route::get('view-company/{id}', function($id){
  $company = App\Models\Company::find($id);
  if(empty($company))
  {
    Flash::error('Graduate not found');
    return redirect(route('companies.index'));
}
return view('companies.show')  
->with('company', $company);
});
Route::get('viewcompany/{id}', function($id){
  $company = App\Models\Company::find($id);
  if(empty($company))
  {
    Flash::error('Graduate not found');
    return redirect(route('companies.index'));
}
return view('companies.show')  
->with('company', $company);
});

Route::get('/viewcompanys/{id}', 'CompanyController@viewcompanys');
Route::get('/viewvacancys/{id}', 'VacancyController@viewvacancys');

Route::get('viewvacacy/{id}', function($id) {
    $vacancy = App\Models\Vacancy::find($id);   
    $user = $company->user; 
    $vacancy = $user->vacancy;
    return view('vacancies.viewvacacy')
    ->with('company', $company)
    ->with('vacancy', $vacancy);
});
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

Route::get('create-teacher', 'AdminController@createTeacher');
Route::post('create-teacher', 'AdminController@teacher');

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

Route::get('viewvacancies', function() {
    $vacancies = App\Models\Vacancy::all();
    return view('graduates.vacancies')
    ->with('vacancies', $vacancies);
});


Route::resource('periods', 'PeriodController');

Route::get('periods/{id}/delete', [
    'as' => 'periods.delete',
    'uses' => 'PeriodController@destroy',
    ]);

Route::get('viewdatagraduate/{id}', function($id) {
    $graduate = App\Models\Graduate::find($id);
    $labor = $graduate->labor;

    if(empty($graduate))
    {
        Flash::error('Graduate not found');
        return redirect(route('graduates.index'));
    }

    return view('administrator.show-profile')
    ->with('graduate', $graduate)
    ->with('labor', $labor);
});

Route::get('viewtestgraduate/{id}', function($id) {
    $graduate = App\Models\Graduate::find($id);

    if(empty($graduate))
    {
        Flash::error('Graduate not found');
        return redirect(route('graduates.index'));
    }

    return view('administrator.show-test')
    ->with('graduate', $graduate);
});

Route::get('test-pdf/{id}', function($id) {
    $data = App\Models\Graduate::find($id);
    $pdf = PDF::loadView('pdf.invoice', compact('data'));
    return $pdf->download('perfil.pdf');
});

Route::get('test2', function() {
    $graduates = App\Models\Graduate::all();
    $chunk = $graduates->take(-4);

    $chunk->all();
    foreach ($chunk as $key => $value) {
        echo $value->name;
        echo "<br>";
    }
});

Route::resource('serviceAdmins', 'ServiceAdminController');

Route::get('serviceAdmins/{id}/delete', [
    'as' => 'serviceAdmins.delete',
    'uses' => 'ServiceAdminController@destroy',
    ]);


Route::resource('vacancyAdmins', 'VacancyAdminController');

Route::get('vacancyAdmins/{id}/delete', [
    'as' => 'vacancyAdmins.delete',
    'uses' => 'VacancyAdminController@destroy',
    ]);


Route::resource('residentAdmins', 'ResidentAdminController');

Route::get('residentAdmins/{id}/delete', [
    'as' => 'residentAdmins.delete',
    'uses' => 'ResidentAdminController@destroy',
    ]);


Route::resource('depis', 'DepiController');

Route::get('depis/{id}/delete', [
    'as' => 'depis.delete',
    'uses' => 'DepiController@destroy',
    ]);


Route::resource('teachers', 'TeacherController');

Route::get('teachers/{id}/delete', [
    'as' => 'teachers.delete',
    'uses' => 'TeacherController@destroy',
    ]);


Route::resource('tests', 'TestController');

Route::get('tests/{id}/delete', [
    'as' => 'tests.delete',
    'uses' => 'TestController@destroy',
    ]);


Route::get('directory', function(){
    $graduates = App\Models\Graduate::all();

    return view('administrator.directory')
    ->with('graduates', $graduates);
});



Route::resource('surveys', 'SurveyController');

Route::get('surveys/{id}/delete', [
    'as' => 'surveys.delete',
    'uses' => 'SurveyController@destroy',
    ]);


Route::resource('surveyQs', 'Survey_qController');

Route::get('surveyQs/{id}/delete', [
    'as' => 'surveyQs.delete',
    'uses' => 'Survey_qController@destroy',
    ]);


Route::resource('surveyOs', 'Survey_oController');

Route::get('surveyOs/{id}/delete', [
    'as' => 'surveyOs.delete',
    'uses' => 'Survey_oController@destroy',
    ]);


Route::resource('surveyAs', 'Survey_aController');

Route::get('surveyAs/{id}/delete', [
    'as' => 'surveyAs.delete',
    'uses' => 'Survey_aController@destroy',
    ]);

Route::get('viewQuestions/{id}', 'SurveyController@viewQuestions');

Route::get('addOption/{id}', 'Survey_oController@createCustom');

Route::get('create-option/{id}', function($id) {
    $question = App\Models\Survey_q::find($id);

    return view('surveyOs.create')
    ->with('question', $question);
});

Route::get('mails/{id}', function($id){
    $shipping = App\Models\Shipping::find($id);
    $users = App\Models\Graduate::all();

    foreach ($users as $user) {
        $user['message'] = $shipping->body;
        $user['email']   = $user->user->email;
        $user['name']    = $user->name;
        $user['title']   = $shipping->title;
        Mail::send('emails', ['user' => $user], function($mail) use ($user)
        {
            $mail->subject('Tenemos nuevas cosas para ti '. $user['name']);
            $mail->to($user['email'], $user['name'], $user['message'], $user['title']);
        });
    }

    Alert::success('Mensaje Enviado Exitosamente.');
    return redirect(route('shippings.index'));
});




Route::resource('shippings', 'ShippingController');

Route::get('shippings/{id}/delete', [
    'as' => 'shippings.delete',
    'uses' => 'ShippingController@destroy',
    ]);

Route::get('users-graduate', function(){
    $graduates = App\Models\Graduate::all();
    foreach ($graduates as $graduate) {
        echo $graduate->user->email;
        echo "<br>";
    }
});

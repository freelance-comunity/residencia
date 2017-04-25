<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateGraduateAdminRequest;
use App\Http\Requests;
use App\Models\Graduate;
use App\User;
use App\Role;
use Hash;   
use Alert;
use Mail;

class AdminController extends Controller
{
    public function graduates() 
    {
    	$graduates = Graduate::all();
    	return view ('administrator.graduates')
    	->with('graduates', $graduates); 
    }

    public function createGraduate()
    {
    	return view('administrator.create-graduate');
    }

    public function storeGraduate(CreateGraduateAdminRequest $request)
    {
        $input = $request->all();
        $password_random = 'secret';
        /*==== Create User for Graduate ====*/
        $role = Role::where('name', 'graduate')->first();
        $data['name'] = $request->input('name').' '.$request->input('last_name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($password_random);
        $usercreate = User::create($data);
        
        $datamail['name'] = $request->input('name');
        $datamail['pass'] = $password_random;
        $datamail['email'] = $request->input('email');


        Mail::send('mailer.register', ['datamail' => $datamail], function($mail) use($datamail){
            $mail->subject('Te proporcionamos las credenciales de acceso al sistema');
            $mail->to($datamail['email'], $datamail['name'], $datamail['pass']);
        });

        $id = $usercreate->id;
        $user = User::find($id);
        $user->attachRole($role);
        $input['user_id'] = $id;
        /*==== End Create User for Graduate ====*/
        $graduate = Graduate::create($input);

        Alert::success('Has dado de alta a un Egresado exitosamente.');

        return redirect(url('allgraduates'));

    }
}

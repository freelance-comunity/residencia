<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Hash;
use Alert;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Input;
use Auth;

class CompanyController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$query = Company::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();

        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $companies = $query->get();

        return view('companies.index')
            ->with('companies', $companies)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Company.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('companies.create');
	}

	/**
	 * Store a newly created Company in storage.
	 *
	 * @param CreateCompanyRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCompanyRequest $request)
	{
		$input = $request->all();
        /*==== Create User for Graduate ====*/
        $role = Role::where('name', 'company')->first();
        $data['name'] = $request->input('name');
		$data['email'] = $request->input('email');
		$data['password'] = Hash::make($request->input('password'));
		$usercreate = User::create($data);
		$id = $usercreate->id;
		$user = User::find($id);
		$email = $user->email;
		$password = $user->password;
		$user->attachRole($role);
		$input['user_id'] = $id;
        /*==== End Create User for Graduate ====*/
		$company = Company::create($input);  

		Auth::login($user);
        return redirect('/home');
	}  

	/**
	 * Display the specified Company.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$company = Company::find($id);

		if(empty($company))
		{
			Flash::error('Company not found');
			return redirect(route('companies.index'));
		}

		return view('companies.show')->with('company', $company);
	}

	/**
	 * Show the form for editing the specified Company.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$company = Company::find($id);

		if(empty($company))
		{
			Flash::error('Company not found');
			return redirect(route('companies.index'));
		}

		return view('companies.edit')->with('company', $company);
	}

	/**
	 * Update the specified Company in storage.
	 *
	 * @param  int    $id
	 * @param CreateCompanyRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateCompanyRequest $request)
	{
		/** @var Company $company */
		$company = Company::find($id);

		if(empty($company))
		{
			Flash::error('Company not found');
			return redirect(route('companies.index'));
		}

		$company->fill($request->all());
		$company->save();

		Alert::success('Datos editados exitosamente!')->persistent("Cerrar");

		return redirect(route('companies.index'));
	}

	/**
	 * Remove the specified Company from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Company $company */
		$company = Company::find($id);

		if(empty($company))
		{
			Flash::error('Company not found');
			return redirect(route('companies.index'));
		}

		$company->delete();

		Alert::success('Datos de la empresa borrado exitosamente!')->persistent("Cerrar");

		return redirect(route('companies.index'));
	}
	public function viewcompanys($id)
	{
		$user = User::find($id);
		$company = $user->company;		
		return view('companies.show')
		->with('company', $company);
	}
	
}

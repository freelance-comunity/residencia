<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateVacancyRequest;
use App\Models\Vacancy;
use App\Models\Company;
use App\User;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;
use Auth;

class VacancyController extends AppBaseController
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
		$query = Vacancy::query();
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

        $vacancies = $query->get();

        return view('vacancies.index')
            ->with('vacancies', $vacancies)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Vacancy.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('vacancies.create');
	}

	/**
	 * Store a newly created Vacancy in storage.
	 *
	 * @param CreateVacancyRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateVacancyRequest $request)
	{

        $user = Auth::user();
		$company = $user->company;
		$input = $request->all();
		$input['company_id'] = $company->id;

		$vacancy = Vacancy::create($input);

		Alert::success('Solicitud de Vacantes Generada Exitosamente!')->persistent("Cerrar");

		return redirect(route('vacancies.index'));		
	}

	/**
	 * Display the specified Vacancy.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$vacancy = Vacancy::find($id);

		if(empty($vacancy))
		{
			Flash::error('Vacancy not found');
			return redirect(route('vacancies.index'));
		}

		return view('vacancies.show')->with('vacancy', $vacancy);
	}

	/**
	 * Show the form for editing the specified Vacancy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vacancy = Vacancy::find($id);

		if(empty($vacancy))
		{
			Flash::error('Vacancy not found');
			return redirect(route('vacancies.index'));
		}

		return view('vacancies.edit')->with('vacancy', $vacancy);
	}

	/**
	 * Update the specified Vacancy in storage.
	 *
	 * @param  int    $id
	 * @param CreateVacancyRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateVacancyRequest $request)
	{
		/** @var Vacancy $vacancy */
		$vacancy = Vacancy::find($id);

		if(empty($vacancy))
		{
			Flash::error('Vacancy not found');
			return redirect(route('vacancies.index'));
		}

		$vacancy->fill($request->all());
		$vacancy->save();

		Alert::success('Solicitud Editada Exitosamente!')->persistent("Cerrar");

		return redirect(route('vacancies.index'));
	}

	/**
	 * Remove the specified Vacancy from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Vacancy $vacancy */
		$vacancy = Vacancy::find($id);

		if(empty($vacancy))
		{
			Flash::error('Vacancy not found');
			return redirect(route('vacancies.index'));
		}

		$vacancy->delete();

		Alert::success('Solicitud Eliminada Exitosamente!')->persistent("Cerrar");

		return redirect(route('vacancies.index'));
	}

	public function vacancyphoto(){
		return view ('vacancies.upload', array('vacancy'));
	}

}

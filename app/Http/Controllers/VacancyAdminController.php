<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateVacancyAdminRequest;
use App\Models\VacancyAdmin;
use App\Models\Period;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class VacancyAdminController extends AppBaseController
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
		$query = VacancyAdmin::query();
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

        $vacancyAdmins = $query->get();

        return view('vacancyAdmins.index')
            ->with('vacancyAdmins', $vacancyAdmins)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new VacancyAdmin.
	 *
	 * @return Response
	 */
	public function create()
	{
		$periods = Period::pluck('name');
		return view('vacancyAdmins.create')
		->with('periods', $periods);
	}

	/**
	 * Store a newly created VacancyAdmin in storage.
	 *
	 * @param CreateVacancyAdminRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateVacancyAdminRequest $request)
	{
        $input = $request->all();

		$vacancyAdmin = VacancyAdmin::create($input);

		Alert::success('Solicitud de Vacantes Generada Exitosamente!')->persistent("Cerrar");

		return redirect(route('vacancyAdmins.index'));
	}

	/**
	 * Display the specified VacancyAdmin.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$vacancyAdmin = VacancyAdmin::find($id);

		if(empty($vacancyAdmin))
		{
			Flash::error('VacancyAdmin not found');
			return redirect(route('vacancyAdmins.index'));
		}

		return view('vacancyAdmins.show')->with('vacancyAdmin', $vacancyAdmin);
	}

	/**
	 * Show the form for editing the specified VacancyAdmin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vacancyAdmin = VacancyAdmin::find($id);

		if(empty($vacancyAdmin))
		{
			Flash::error('VacancyAdmin not found');
			return redirect(route('vacancyAdmins.index'));
		}

		return view('vacancyAdmins.edit')->with('vacancyAdmin', $vacancyAdmin);
	}

	/**
	 * Update the specified VacancyAdmin in storage.
	 *
	 * @param  int    $id
	 * @param CreateVacancyAdminRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateVacancyAdminRequest $request)
	{
		/** @var VacancyAdmin $vacancyAdmin */
		$vacancyAdmin = VacancyAdmin::find($id);

		if(empty($vacancyAdmin))
		{
			Flash::error('VacancyAdmin not found');
			return redirect(route('vacancyAdmins.index'));
		}

		$vacancyAdmin->fill($request->all());
		$vacancyAdmin->save();

		Alert::success('Solicitud Editada Exitosamente!')->persistent("Cerrar");

		return redirect(route('vacancyAdmins.index'));
	}

	/**
	 * Remove the specified VacancyAdmin from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var VacancyAdmin $vacancyAdmin */
		$vacancyAdmin = VacancyAdmin::find($id);

		if(empty($vacancyAdmin))
		{
			Flash::error('VacancyAdmin not found');
			return redirect(route('vacancyAdmins.index'));
		}

		$vacancyAdmin->delete();

		Alert::success('Solicitud Eliminada Exitosamente!')->persistent("Cerrar");

		return redirect(route('vacancyAdmins.index'));
	}
}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateServiceAdminRequest;
use App\Models\ServiceAdmin;
use App\Models\Period;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class ServiceAdminController extends AppBaseController
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
		$query = ServiceAdmin::query();
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

        $serviceAdmins = $query->get();

        return view('serviceAdmins.index')
            ->with('serviceAdmins', $serviceAdmins)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new ServiceAdmin.
	 *
	 * @return Response
	 */
	public function create()
	{
		$periods = Period::pluck('name','name');
		return view('serviceAdmins.create')
		->with('periods', $periods);
	}

	/**
	 * Store a newly created ServiceAdmin in storage.
	 *
	 * @param CreateServiceAdminRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateServiceAdminRequest $request)
	{
		
        $input = $request->all();

		$serviceAdmin = ServiceAdmin::create($input);

		Alert::success('Solicitud Generada Exitosamente!')->persistent("Cerrar");

		return redirect(route('serviceAdmins.index'));
	}

	/**
	 * Display the specified ServiceAdmin.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$serviceAdmin = ServiceAdmin::find($id);

		if(empty($serviceAdmin))
		{
			Flash::error('ServiceAdmin not found');
			return redirect(route('serviceAdmins.index'));
		}

		return view('serviceAdmins.show')->with('serviceAdmin', $serviceAdmin);
	}

	/**
	 * Show the form for editing the specified ServiceAdmin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$periods = Period::pluck('name','name');
		$serviceAdmin = ServiceAdmin::find($id);

		if(empty($serviceAdmin))
		{
			Flash::error('ServiceAdmin not found');
			return redirect(route('serviceAdmins.index'));
		}

		return view('serviceAdmins.edit')->with('periods', $periods)->with('serviceAdmin', $serviceAdmin);
	}

	/**
	 * Update the specified ServiceAdmin in storage.
	 *
	 * @param  int    $id
	 * @param CreateServiceAdminRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateServiceAdminRequest $request)
	{
		/** @var ServiceAdmin $serviceAdmin */
		$serviceAdmin = ServiceAdmin::find($id);

		if(empty($serviceAdmin))
		{
			Flash::error('ServiceAdmin not found');
			return redirect(route('serviceAdmins.index'));
		}

		$serviceAdmin->fill($request->all());
		$serviceAdmin->save();

		Alert::success('Solicitud Editada Exitosamente!')->persistent("Cerrar");

		return redirect(route('serviceAdmins.index'));
	}

	/**
	 * Remove the specified ServiceAdmin from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var ServiceAdmin $serviceAdmin */
		$serviceAdmin = ServiceAdmin::find($id);

		if(empty($serviceAdmin))
		{
			Flash::error('ServiceAdmin not found');
			return redirect(route('serviceAdmins.index'));
		}

		$serviceAdmin->delete();

		Alert::success('Solicitud Eliminada Exitosamente!')->persistent("Cerrar");

		return redirect(route('serviceAdmins.index'));
	}
}

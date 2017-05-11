<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateResidentAdminRequest;
use App\Models\ResidentAdmin;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class ResidentAdminController extends AppBaseController
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
		$query = ResidentAdmin::query();
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

        $residentAdmins = $query->get();

        return view('residentAdmins.index')
            ->with('residentAdmins', $residentAdmins)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new ResidentAdmin.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('residentAdmins.create');
	}

	/**
	 * Store a newly created ResidentAdmin in storage.
	 *
	 * @param CreateResidentAdminRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateResidentAdminRequest $request)
	{
        $input = $request->all();

		$residentAdmin = ResidentAdmin::create($input);

		Alert::success('Solicitud de Residentes Generada Exitosamente!')->persistent("Cerrar");

		return redirect(route('residentAdmins.index'));
	}

	/**
	 * Display the specified ResidentAdmin.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$residentAdmin = ResidentAdmin::find($id);

		if(empty($residentAdmin))
		{
			Flash::error('ResidentAdmin not found');
			return redirect(route('residentAdmins.index'));
		}

		return view('residentAdmins.show')->with('residentAdmin', $residentAdmin);
	}

	/**
	 * Show the form for editing the specified ResidentAdmin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$residentAdmin = ResidentAdmin::find($id);

		if(empty($residentAdmin))
		{
			Flash::error('ResidentAdmin not found');
			return redirect(route('residentAdmins.index'));
		}

		return view('residentAdmins.edit')->with('residentAdmin', $residentAdmin);
	}

	/**
	 * Update the specified ResidentAdmin in storage.
	 *
	 * @param  int    $id
	 * @param CreateResidentAdminRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateResidentAdminRequest $request)
	{
		/** @var ResidentAdmin $residentAdmin */
		$residentAdmin = ResidentAdmin::find($id);

		if(empty($residentAdmin))
		{
			Flash::error('ResidentAdmin not found');
			return redirect(route('residentAdmins.index'));
		}

		$residentAdmin->fill($request->all());
		$residentAdmin->save();

		Alert::success('Solicitud Editada Exitosamente!')->persistent("Cerrar");

		return redirect(route('residentAdmins.index'));
	}

	/**
	 * Remove the specified ResidentAdmin from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var ResidentAdmin $residentAdmin */
		$residentAdmin = ResidentAdmin::find($id);

		if(empty($residentAdmin))
		{
			Flash::error('ResidentAdmin not found');
			return redirect(route('residentAdmins.index'));
		}

		$residentAdmin->delete();

		Alert::success('Solicitud Eliminada Exitosamente!')->persistent("Cerrar");

		return redirect(route('residentAdmins.index'));
	}
}

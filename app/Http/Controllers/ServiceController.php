<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class ServiceController extends AppBaseController
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
		$query = Service::query();
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

        $services = $query->get();

        return view('services.index')
            ->with('services', $services)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Service.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('services.create');
	}

	/**
	 * Store a newly created Service in storage.
	 *
	 * @param CreateServiceRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateServiceRequest $request)
	{
        $input = $request->all();

		$service = Service::create($input);

		Alert::success('Solicitud Generada Exitosamente!')->persistent("Cerrar");

		return redirect(route('services.index'));
	}

	/**
	 * Display the specified Service.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		return view('services.show')->with('service', $service);
	}

	/**
	 * Show the form for editing the specified Service.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		return view('services.edit')->with('service', $service);
	}

	/**
	 * Update the specified Service in storage.
	 *
	 * @param  int    $id
	 * @param CreateServiceRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateServiceRequest $request)
	{
		/** @var Service $service */
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		$service->fill($request->all());
		$service->save();

		Alert::success('Solicitud Editada Exitosamente!')->persistent("Cerrar");

		return redirect(route('services.index'));
	}

	/**
	 * Remove the specified Service from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Service $service */
		$service = Service::find($id);

		if(empty($service))
		{
			Flash::error('Service not found');
			return redirect(route('services.index'));
		}

		$service->delete();

		Alert::success('Solicitud Eliminada Exitosamente!')->persistent("Cerrar");

		return redirect(route('services.index'));
	}
}

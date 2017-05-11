<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePeriodRequest;
use App\Models\Period;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class PeriodController extends AppBaseController
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
		$query = Period::query();
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

        $periods = $query->get();

        return view('periods.index')
            ->with('periods', $periods)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Period.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('periods.create');
	}

	/**
	 * Store a newly created Period in storage.
	 *
	 * @param CreatePeriodRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePeriodRequest $request)
	{
        $input = $request->all();

		$period = Period::create($input);

		Alert::success('Periodo guardado exitosamente')->persistent('Cerrar');

		return redirect(route('periods.index'));
	}

	/**
	 * Display the specified Period.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$period = Period::find($id);

		if(empty($period))
		{
			Flash::error('Period not found');
			return redirect(route('periods.index'));
		}

		return view('periods.show')->with('period', $period);
	}

	/**
	 * Show the form for editing the specified Period.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$period = Period::find($id);

		if(empty($period))
		{
			Flash::error('Period not found');
			return redirect(route('periods.index'));
		}

		return view('periods.edit')->with('period', $period);
	}

	/**
	 * Update the specified Period in storage.
	 *
	 * @param  int    $id
	 * @param CreatePeriodRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatePeriodRequest $request)
	{
		/** @var Period $period */
		$period = Period::find($id);

		if(empty($period))
		{
			Flash::error('Period not found');
			return redirect(route('periods.index'));
		}

		$period->fill($request->all());
		$period->save();

		Flash::message('Period updated successfully.');

		return redirect(route('periods.index'));
	}

	/**
	 * Remove the specified Period from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Period $period */
		$period = Period::find($id);

		if(empty($period))
		{
			Flash::error('Period not found');
			return redirect(route('periods.index'));
		}

		$period->delete();

		Flash::message('Period deleted successfully.');

		return redirect(route('periods.index'));
	}
}

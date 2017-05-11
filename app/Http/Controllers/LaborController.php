<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateLaborRequest;
use App\Models\Labor;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Auth;
use Alert;
use App\Models\Graduate;

class LaborController extends AppBaseController
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
		$query = Labor::query();
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

		$labors = $query->get();

		return view('labors.index')
		->with('labors', $labors)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Labor.
	 *
	 * @return Response
	 */
	public function create()
	{		
		$user = Auth::user();
		$graduate = $user->graduate;
		$labor = $graduate->labor;
		
		if (isset($labor)) {
			return view('labors.labordata')
			->with('labor', $labor);
		}else{
			return view('labors.create');
		}
		
	}

	/**
	 * Store a newly created Labor in storage.
	 *
	 * @param CreateLaborRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateLaborRequest $request)
	{	
		$user = Auth::user();
		$graduate = $user->graduate;
		$input = $request->all();
		$input['graduate_id'] = $graduate->id;

		$labor = Labor::create($input);

		Alert::success('Tus datos laborales han sido guardados exitosamente.');

		return view('graduates.show')
			->with('graduate', $graduate);
	}

	/**
	 * Display the specified Labor.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$labor = Labor::find($id);

		if(empty($labor))
		{
			Flash::error('Labor not found');
			return redirect(route('labors.index'));
		}

		return view('labors.show')->with('labor', $labor);
	}

	/**
	 * Show the form for editing the specified Labor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$labor = Labor::find($id);

		if(empty($labor))
		{
			Flash::error('Labor not found');
			return redirect(route('labors.index'));
		}

		return view('labors.edit')->with('labor', $labor);
	}

	/**
	 * Update the specified Labor in storage.
	 *
	 * @param  int    $id
	 * @param CreateLaborRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateLaborRequest $request)
	{
		/** @var Labor $labor */
		$labor = Labor::find($id);

		if(empty($labor))
		{
			Flash::error('Labor not found');
			return redirect(route('labors.index'));
		}

		$labor->fill($request->all());
		$labor->save();

		Alert::success('Datos Laborales Actualizados.');

		return view('graduates.show')->with('graduate', $labor->graduate);
	}

	/**
	 * Remove the specified Labor from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Labor $labor */
		$labor = Labor::find($id);

		if(empty($labor))
		{
			Flash::error('Labor not found');
			return redirect(route('labors.index'));
		}

		$labor->delete();

		Flash::message('Labor deleted successfully.');

		return redirect(route('labors.index'));
	}
}

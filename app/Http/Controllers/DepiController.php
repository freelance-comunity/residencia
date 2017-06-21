<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateDepiRequest;
use App\Models\Depi;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class DepiController extends AppBaseController
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
		$query = Depi::query();
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

        $depis = $query->get();

        return view('depis.index')
            ->with('depis', $depis)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Depi.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('depis.create');
	}

	/**
	 * Store a newly created Depi in storage.
	 *
	 * @param CreateDepiRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateDepiRequest $request)
	{
        $input = $request->all();

		$depi = Depi::create($input);

		Flash::message('Depi saved successfully.');

		return redirect(route('depis.index'));
	}

	/**
	 * Display the specified Depi.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		return view('depis.show')->with('depi', $depi);
	}

	/**
	 * Show the form for editing the specified Depi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		return view('depis.edit')->with('depi', $depi);
	}

	/**
	 * Update the specified Depi in storage.
	 *
	 * @param  int    $id
	 * @param CreateDepiRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateDepiRequest $request)
	{
		/** @var Depi $depi */
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		$depi->fill($request->all());
		$depi->save();

		Flash::message('Depi updated successfully.');

		return redirect(route('depis.index'));
	}

	/**
	 * Remove the specified Depi from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Depi $depi */
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		$depi->delete();

		Flash::message('Depi deleted successfully.');

		return redirect(route('depis.index'));
	}
}

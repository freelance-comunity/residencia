<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateGraduateRequest;
use App\Models\Graduate;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use App\User;
use Alert;

class GraduateController extends AppBaseController
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
		$query = Graduate::query();
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

        $graduates = $query->get();

        return view('graduates.index')
            ->with('graduates', $graduates)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Graduate.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('graduates.create');
	}

	/**
	 * Store a newly created Graduate in storage.
	 *
	 * @param CreateGraduateRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateGraduateRequest $request)
	{
        $input = $request->all();
        
		$graduate = Graduate::create($input);

		Flash::message('Graduate saved successfully.');

		return redirect(route('graduates.index'));
	}

	/**
	 * Display the specified Graduate.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$graduate = Graduate::find($id);

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

		return view('graduates.show')->with('graduate', $graduate);
	}

	/**
	 * Show the form for editing the specified Graduate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$graduate = Graduate::find($id);

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

		return view('graduates.edit')->with('graduate', $graduate);
	}

	/**
	 * Update the specified Graduate in storage.
	 *
	 * @param  int    $id
	 * @param CreateGraduateRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateGraduateRequest $request)
	{
		/** @var Graduate $graduate */
		$graduate = Graduate::find($id);

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

		$graduate->fill($request->all());
		$graduate->save();

		Flash::message('Graduate updated successfully.');

		return redirect(route('graduates.index'));
	}

	/**
	 * Remove the specified Graduate from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Graduate $graduate */
		$graduate = Graduate::find($id);

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

		$graduate->delete();

		Flash::message('Graduate deleted successfully.');

		return redirect(route('graduates.index'));
	}
}

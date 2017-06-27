<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTestRequest;
use App\Models\Test;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class TestController extends AppBaseController
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
		$query = Test::query();
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

		$tests = $query->get();

		return view('tests.index')
		->with('tests', $tests)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Test.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tests.create');
	}

	/**
	 * Store a newly created Test in storage.
	 *
	 * @param CreateTestRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateTestRequest $request)
	{	
		$count = Test::all()->count();
		$input = $request->all();
		if ($count >= 20) {
			Alert::error('Has sobrepasado el limite de preguntas a almacenar')->persistent('Cerrar');
			return redirect()->back();
		}else{
			$test = Test::create($input);

			Alert::success('Pregunta guardada exitosamente.')->persistent('Cerrar');

			return redirect(route('tests.index'));
		}	
	}

	/**
	 * Display the specified Test.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$test = Test::find($id);

		if(empty($test))
		{
			Flash::error('Test not found');
			return redirect(route('tests.index'));
		}

		return view('tests.show')->with('test', $test);
	}

	/**
	 * Show the form for editing the specified Test.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$test = Test::find($id);

		if(empty($test))
		{
			Flash::error('Test not found');
			return redirect(route('tests.index'));
		}

		return view('tests.edit')->with('test', $test);
	}

	/**
	 * Update the specified Test in storage.
	 *
	 * @param  int    $id
	 * @param CreateTestRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateTestRequest $request)
	{
		/** @var Test $test */
		$test = Test::find($id);

		if(empty($test))
		{
			Flash::error('Test not found');
			return redirect(route('tests.index'));
		}

		$test->fill($request->all());
		$test->save();

		Flash::message('Test updated successfully.');

		return redirect(route('tests.index'));
	}

	/**
	 * Remove the specified Test from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Test $test */
		$test = Test::find($id);

		if(empty($test))
		{
			Flash::error('Test not found');
			return redirect(route('tests.index'));
		}

		$test->delete();

		Flash::message('Test deleted successfully.');

		return redirect(route('tests.index'));
	}
}

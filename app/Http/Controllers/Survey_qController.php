<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSurvey_qRequest;
use App\Models\Survey_q;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class Survey_qController extends AppBaseController
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
		$query = Survey_q::query();
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

        $surveyQs = $query->get();

        return view('surveyQs.index')
            ->with('surveyQs', $surveyQs)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Survey_q.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('surveyQs.create');
	}

	/**
	 * Store a newly created Survey_q in storage.
	 *
	 * @param CreateSurvey_qRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSurvey_qRequest $request)
	{
        $input = $request->all();

		$surveyQ = Survey_q::create($input);

		//Flash::message('Survey_q saved successfully.');
		Alert::success('Pregunta agregada exitosamente');

		return redirect(route('surveys.index'));
	}

	/**
	 * Display the specified Survey_q.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$surveyQ = Survey_q::find($id);

		if(empty($surveyQ))
		{
			Flash::error('Survey_q not found');
			return redirect(route('surveyQs.index'));
		}

		return view('surveyQs.show')->with('surveyQ', $surveyQ);
	}

	/**
	 * Show the form for editing the specified Survey_q.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$surveyQ = Survey_q::find($id);

		if(empty($surveyQ))
		{
			Flash::error('Survey_q not found');
			return redirect(route('surveyQs.index'));
		}

		return view('surveyQs.edit')->with('surveyQ', $surveyQ);
	}

	/**
	 * Update the specified Survey_q in storage.
	 *
	 * @param  int    $id
	 * @param CreateSurvey_qRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateSurvey_qRequest $request)
	{
		/** @var Survey_q $surveyQ */
		$surveyQ = Survey_q::find($id);

		if(empty($surveyQ))
		{
			Flash::error('Survey_q not found');
			return redirect(route('surveyQs.index'));
		}

		$surveyQ->fill($request->all());
		$surveyQ->save();

		Flash::message('Survey_q updated successfully.');

		return redirect(route('surveyQs.index'));
	}

	/**
	 * Remove the specified Survey_q from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Survey_q $surveyQ */
		$surveyQ = Survey_q::find($id);

		if(empty($surveyQ))
		{
			Flash::error('Survey_q not found');
			return redirect(route('surveyQs.index'));
		}

		$surveyQ->delete();

		//Flash::message('Survey_q deleted successfully.');

		//return redirect(route('surveyQs.index'));
		Alert::success('Pregunta eliminada exitosamente.');
		return redirect()->back();
	}
}

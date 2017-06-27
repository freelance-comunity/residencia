<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSurveyRequest;
use App\Models\Survey;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class SurveyController extends AppBaseController
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
		$query = Survey::query();
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

        $surveys = $query->get();

        return view('surveys.index')
            ->with('surveys', $surveys)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Survey.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('surveys.create');
	}

	/**
	 * Store a newly created Survey in storage.
	 *
	 * @param CreateSurveyRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSurveyRequest $request)
	{
        $input = $request->all();

		$survey = Survey::create($input);

		Flash::message('Survey saved successfully.');

		return redirect(route('surveys.index'));
	}

	/**
	 * Display the specified Survey.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$survey = Survey::find($id);

		if(empty($survey))
		{
			Flash::error('Survey not found');
			return redirect(route('surveys.index'));
		}

		return view('surveys.show')->with('survey', $survey);
	}

	/**
	 * Show the form for editing the specified Survey.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$survey = Survey::find($id);

		if(empty($survey))
		{
			Flash::error('Survey not found');
			return redirect(route('surveys.index'));
		}

		return view('surveys.edit')->with('survey', $survey);
	}

	/**
	 * Update the specified Survey in storage.
	 *
	 * @param  int    $id
	 * @param CreateSurveyRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateSurveyRequest $request)
	{
		/** @var Survey $survey */
		$survey = Survey::find($id);

		if(empty($survey))
		{
			Flash::error('Survey not found');
			return redirect(route('surveys.index'));
		}

		$survey->fill($request->all());
		$survey->save();

		Flash::message('Survey updated successfully.');

		return redirect(route('surveys.index'));
	}

	/**
	 * Remove the specified Survey from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Survey $survey */
		$survey = Survey::find($id);

		if(empty($survey))
		{
			Flash::error('Survey not found');
			return redirect(route('surveys.index'));
		}

		$survey->delete();

		Flash::message('Survey deleted successfully.');

		return redirect(route('surveys.index'));
	}

	public function viewQuestions($id)
	{
		$survey = Survey::find($id);
		$surveyQs = $survey->questions;

		return view('surveyQs.index')
		->with('surveyQs', $surveyQs)
		->with('survey', $survey);
		//return redirect(route('surveyQs.index'));
	}

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSurvey_oRequest;
use App\Models\Survey_o;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use App\Models\Survey_q;

class Survey_oController extends AppBaseController
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
		$query = Survey_o::query();
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

        $surveyOs = $query->get();

        return view('surveyOs.index')
            ->with('surveyOs', $surveyOs)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Survey_o.
	 *
	 * @return Response
	 */
	public function create()
	{	
		//$question = Survey_q::find($id);
		return view('surveyOs.create');
	}

	public function createCustom($id)
	{
		$question = Survey_q::find($id);
		$surveyOs = Survey_o::where('survey_q_id', $question->id)->get();
		return view('surveyOs.index')
		->with('surveyOs', $surveyOs)
		->with('question', $question);
	}

	/**
	 * Store a newly created Survey_o in storage.
	 *
	 * @param CreateSurvey_oRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSurvey_oRequest $request)
	{
        $input = $request->all();

		$surveyO = Survey_o::create($input);

		Flash::message('Survey_o saved successfully.');

		$question = Survey_q::find($request->input('q_id'));
		$surveyOs = Survey_o::where('survey_q_id', $question->id)->get();

		return view('surveyOs.index')
		->with('surveyOs', $surveyOs)
		->with('question', $question);
	}

	/**
	 * Display the specified Survey_o.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$surveyO = Survey_o::find($id);

		if(empty($surveyO))
		{
			Flash::error('Survey_o not found');
			return redirect(route('surveyOs.index'));
		}

		return view('surveyOs.show')->with('surveyO', $surveyO);
	}

	/**
	 * Show the form for editing the specified Survey_o.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$surveyO = Survey_o::find($id);

		if(empty($surveyO))
		{
			Flash::error('Survey_o not found');
			return redirect(route('surveyOs.index'));
		}

		return view('surveyOs.edit')->with('surveyO', $surveyO);
	}

	/**
	 * Update the specified Survey_o in storage.
	 *
	 * @param  int    $id
	 * @param CreateSurvey_oRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateSurvey_oRequest $request)
	{
		/** @var Survey_o $surveyO */
		$surveyO = Survey_o::find($id);

		if(empty($surveyO))
		{
			Flash::error('Survey_o not found');
			return redirect(route('surveyOs.index'));
		}

		$surveyO->fill($request->all());
		$surveyO->save();

		Flash::message('Survey_o updated successfully.');

		return redirect(route('surveyOs.index'));
	}

	/**
	 * Remove the specified Survey_o from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Survey_o $surveyO */
		$surveyO = Survey_o::find($id);

		if(empty($surveyO))
		{
			Flash::error('Survey_o not found');
			return redirect(route('surveyOs.index'));
		}

		$surveyO->delete();

		Flash::message('Survey_o deleted successfully.');

		return redirect(route('surveyOs.index'));
	}
}

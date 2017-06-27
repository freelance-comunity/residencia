<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSurvey_aRequest;
use App\Models\Survey_a;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class Survey_aController extends AppBaseController
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
		$query = Survey_a::query();
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

        $surveyAs = $query->get();

        return view('surveyAs.index')
            ->with('surveyAs', $surveyAs)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Survey_a.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('surveyAs.create');
	}

	/**
	 * Store a newly created Survey_a in storage.
	 *
	 * @param CreateSurvey_aRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSurvey_aRequest $request)
	{
        $input = $request->all();

		$surveyA = Survey_a::create($input);

		Flash::message('Survey_a saved successfully.');

		return redirect(route('surveyAs.index'));
	}

	/**
	 * Display the specified Survey_a.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$surveyA = Survey_a::find($id);

		if(empty($surveyA))
		{
			Flash::error('Survey_a not found');
			return redirect(route('surveyAs.index'));
		}

		return view('surveyAs.show')->with('surveyA', $surveyA);
	}

	/**
	 * Show the form for editing the specified Survey_a.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$surveyA = Survey_a::find($id);

		if(empty($surveyA))
		{
			Flash::error('Survey_a not found');
			return redirect(route('surveyAs.index'));
		}

		return view('surveyAs.edit')->with('surveyA', $surveyA);
	}

	/**
	 * Update the specified Survey_a in storage.
	 *
	 * @param  int    $id
	 * @param CreateSurvey_aRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateSurvey_aRequest $request)
	{
		/** @var Survey_a $surveyA */
		$surveyA = Survey_a::find($id);

		if(empty($surveyA))
		{
			Flash::error('Survey_a not found');
			return redirect(route('surveyAs.index'));
		}

		$surveyA->fill($request->all());
		$surveyA->save();

		Flash::message('Survey_a updated successfully.');

		return redirect(route('surveyAs.index'));
	}

	/**
	 * Remove the specified Survey_a from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Survey_a $surveyA */
		$surveyA = Survey_a::find($id);

		if(empty($surveyA))
		{
			Flash::error('Survey_a not found');
			return redirect(route('surveyAs.index'));
		}

		$surveyA->delete();

		Flash::message('Survey_a deleted successfully.');

		return redirect(route('surveyAs.index'));
	}
}

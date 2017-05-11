<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePollRequest;
use App\Models\Poll;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Auth;
use Alert;
use App\User;
use App\Models\Graduate;
use App\Models\Period;

class PollController extends AppBaseController
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
		$query = Poll::query();
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

        $polls = $query->get();

        return view('polls.index')
            ->with('polls', $polls)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Poll.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = Auth::user();
		$graduate = $user->graduate;
		$poll = $graduate->poll;
		$periods = Period::pluck('name', 'name');
		
		if (isset($poll)) {
			return view('polls.show')->with('graduate', $graduate);
		}else{
			return view('polls.create')
			->with('periods', $periods);
		}
	}

	/**
	 * Store a newly created Poll in storage.
	 *
	 * @param CreatePollRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePollRequest $request)
	{
        $input = $request->all();
        $user = Auth::user();
        $graduate = $user->graduate;
        $input['question_1'] = $user->name;
        $input['question_2'] = $graduate->phone;
        $input['question_3'] = $user->email;
        $input['graduate_id'] = $graduate->id;
		$poll = Poll::create($input);

		Alert::success('Encuesta Guardada Exitosamente.')->persistent('Cerrar');

		return view('polls.show')->with('graduate', $graduate);
	}

	/**
	 * Display the specified Poll.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		return view('polls.show')->with('poll', $poll);
	}

	/**
	 * Show the form for editing the specified Poll.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		return view('polls.edit')->with('poll', $poll);
	}

	/**
	 * Update the specified Poll in storage.
	 *
	 * @param  int    $id
	 * @param CreatePollRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatePollRequest $request)
	{
		/** @var Poll $poll */
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		$poll->fill($request->all());
		$poll->save();

		Flash::message('Poll updated successfully.');

		return redirect(route('polls.index'));
	}

	/**
	 * Remove the specified Poll from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Poll $poll */
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		$poll->delete();

		Flash::message('Poll deleted successfully.');

		return redirect(route('polls.index'));
	}
}

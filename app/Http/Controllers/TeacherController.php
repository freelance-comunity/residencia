<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class TeacherController extends AppBaseController
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
		$query = Teacher::query();
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

        $teachers = $query->get();

        return view('teachers.index')
            ->with('teachers', $teachers)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Teacher.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('teachers.create');
	}

	/**
	 * Store a newly created Teacher in storage.
	 *
	 * @param CreateTeacherRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateTeacherRequest $request)
	{
        $input = $request->all();

		$teacher = Teacher::create($input);

		Flash::message('Teacher saved successfully.');

		return redirect(route('teachers.index'));
	}

	/**
	 * Display the specified Teacher.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$teacher = Teacher::find($id);

		if(empty($teacher))
		{
			Flash::error('Teacher not found');
			return redirect(route('teachers.index'));
		}

		return view('teachers.show')->with('teacher', $teacher);
	}

	/**
	 * Show the form for editing the specified Teacher.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$teacher = Teacher::find($id);

		if(empty($teacher))
		{
			Flash::error('Teacher not found');
			return redirect(route('teachers.index'));
		}

		return view('teachers.edit')->with('teacher', $teacher);
	}

	/**
	 * Update the specified Teacher in storage.
	 *
	 * @param  int    $id
	 * @param CreateTeacherRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateTeacherRequest $request)
	{
		/** @var Teacher $teacher */
		$teacher = Teacher::find($id);

		if(empty($teacher))
		{
			Flash::error('Teacher not found');
			return redirect(route('teachers.index'));
		}

		$teacher->fill($request->all());
		$teacher->save();

		Flash::message('Teacher updated successfully.');

		return redirect(route('teachers.index'));
	}

	/**
	 * Remove the specified Teacher from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Teacher $teacher */
		$teacher = Teacher::find($id);

		if(empty($teacher))
		{
			Flash::error('Teacher not found');
			return redirect(route('teachers.index'));
		}

		$teacher->delete();

		Flash::message('Teacher deleted successfully.');

		return redirect(route('teachers.index'));
	}
}

@extends('layouts.app')

@section('main-content')

    <div class="container">

        @include('sweet::alert')

        <div class="row">
            <h1 class="pull-left">Vacancies</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('vacancies.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($vacancies->isEmpty())
                <div class="well text-center">No Vacancies found.</div>
            @else
                <table class="table" id="myTable">
                    <thead>
                    <th>Position</th>
			<th>Task</th>
			<th>Abilities</th>
			<th>Area</th>
			<th>Salary</th>
			<th>Contact</th>
			<th>Period</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($vacancies as $vacancy)
                  
                        <tr>
                            <td>{!! $vacancy->position !!}</td>
					<td>{!! $vacancy->task !!}</td>
					<td>{!! $vacancy->abilities !!}</td>
					<td>{!! $vacancy->area !!}</td>
					<td>{!! $vacancy->salary !!}</td>
					<td>{!! $vacancy->contact !!}</td>
					<td>{!! $vacancy->period !!}</td>
                            <td>
                                <a href="{!! route('vacancies.edit', [$vacancy->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('vacancies.delete', [$vacancy->id]) !!}" onclick="return confirm('Are you sure wants to delete this Vacancy?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                       
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
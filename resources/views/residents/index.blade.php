@extends('layouts.app')

@section('main-content')

    <div class="container">

        @include('sweet::alert')

        <div class="row">
            <h1 class="pull-left">Residents</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('residents.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($residents->isEmpty())
                <div class="well text-center">No Residents found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Name Project</th>
			<th>Objective</th>
			<th>Students</th>
			<th>Applicant</th>
			<th>Email</th>
			<th>Period</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($residents as $residents)
                        <tr>
                            <td>{!! $residents->name_project !!}</td>
					<td>{!! $residents->objective !!}</td>
					<td>{!! $residents->students !!}</td>
					<td>{!! $residents->applicant !!}</td>
					<td>{!! $residents->email !!}</td>
					<td>{!! $residents->period !!}</td>
                            <td>
                                <a href="{!! route('residents.edit', [$residents->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('residents.delete', [$residents->id]) !!}" onclick="return confirm('Are you sure wants to delete this Residents?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
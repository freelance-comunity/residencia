@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Teachers</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('teachers.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($teachers->isEmpty())
                <div class="well text-center">No Teachers found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Name</th>
			<th>Last Name</th>
			<th>Rfc</th>
			<th>Phone</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{!! $teacher->name !!}</td>
					<td>{!! $teacher->last_name !!}</td>
					<td>{!! $teacher->rfc !!}</td>
					<td>{!! $teacher->phone !!}</td>
                            <td>
                                <a href="{!! route('teachers.edit', [$teacher->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('teachers.delete', [$teacher->id]) !!}" onclick="return confirm('Are you sure wants to delete this Teacher?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
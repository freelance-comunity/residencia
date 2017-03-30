@extends('layouts.app')

@section('main-content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Services</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('services.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($services->isEmpty())
                <div class="well text-center">No Services found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Task</th>
			<th>Area</th>
			<th>Contact</th>
			<th>Period</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($services as $service)
                        <tr>
                            <td>{!! $service->task !!}</td>
					<td>{!! $service->area !!}</td>
					<td>{!! $service->contact !!}</td>
					<td>{!! $service->period !!}</td>
                            <td>
                                <a href="{!! route('services.edit', [$service->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('services.delete', [$service->id]) !!}" onclick="return confirm('Are you sure wants to delete this Service?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
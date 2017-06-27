@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Survey_as</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('surveyAs.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($surveyAs->isEmpty())
        <div class="well text-center">No Survey_as found.</div>
        @else
        <table class="table">
            <thead>
                <th>Q Id</th>
                <th>O Value</th>
                <th>Survey Id</th>
                <th width="50px">Action</th>
            </thead>
            <tbody>
               
                @foreach($surveyAs as $surveyA)
                <tr>
                    <td>{!! $surveyA->q_id !!}</td>
                    <td>{!! $surveyA->o_value !!}</td>
                    <td>{!! $surveyA->survey_id !!}</td>
                    <td>
                        <a href="{!! route('surveyAs.edit', [$surveyA->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('surveyAs.delete', [$surveyA->id]) !!}" onclick="return confirm('Are you sure wants to delete this Survey_a?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Labors</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('labors.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($labors->isEmpty())
        <div class="well text-center">No Labors found.</div>
        @else
        <table class="table">
            <thead>
                <th>Company Name</th>
                <th>Company Phone</th>
                <th>Position</th>
                <th>Work Area</th>
                <th>Salary</th>
                <th>Sector</th>
                <th width="50px">Action</th>
            </thead>
            <tbody>
               
                @foreach($labors as $labor)
                <tr>
                    <td>{!! $labor->company_name !!}</td>
                    <td>{!! $labor->company_phone !!}</td>
                    <td>{!! $labor->position !!}</td>
                    <td>{!! $labor->work_area !!}</td>
                    <td>{!! $labor->salary !!}</td>
                    <td>{!! $labor->sector !!}</td>
                    <td>
                        <a href="{!! route('labors.edit', [$labor->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('labors.delete', [$labor->id]) !!}" onclick="return confirm('Are you sure wants to delete this Labor?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
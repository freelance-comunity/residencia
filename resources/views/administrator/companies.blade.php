@extends('layouts.app')

@section('main-content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Companies</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{{ url('create-company') }}">Add New</a>
        </div>

        <div class="row">
            @if($companies->isEmpty())
                <div class="well text-center">No Companies found.</div>
            @else
                <table class="table" id="myTable">
                    <thead>
                    <th>Nombre</th>
                    <th>Sector</th>
                    <th>RFC</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Director</th>
                    <th>Contacto</th>
                    <th>Periodo</th>
                    <th width="50px">Acción</th>
                    </thead>
                    <tbody>
                     
                    @foreach($companies as $company)
                        <tr>
                            <td>{!! $company->name !!}</td>
					<td>{!! $company->sector !!}</td>
					<td>{!! $company->rfc !!}</td>
					<td>{!! $company->address !!}</td>
					<td>{!! $company->phone !!}</td>
					<td>{!! $company->director !!}</td>
					<td>{!! $company->contact !!}</td>
					<td>{!! $company->period !!}</td>
                            <td>
                                <a href="{!! route('companies.edit', [$company->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('companies.delete', [$company->id]) !!}" onclick="return confirm('Are you sure wants to delete this Company?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
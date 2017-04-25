@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Residentes</h1>
       
    </div>

    <div class="row">
        @if($residents->isEmpty())
        <div class="well text-center">No se encontraron solicitudes para residentes</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Nombre del Proyecto</th>
                <th>Objectivo</th>
                <th>No. de estudiantes</th>
                <th>Applicante</th>
                
                <th>Email</th>
                <th>Periodo</th>
                <th width="50px">Acción</th>
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
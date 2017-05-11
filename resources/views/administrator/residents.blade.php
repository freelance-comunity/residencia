@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Residentes</h1>    
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('residentAdmins.create') !!}">Agregar nuevo</a>
    </div>

    <div class="row">
        @if($residents->isEmpty())
        <div class="well text-center">No se encontraron solicitudes para residentes</div>
        @else
        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead>
                    <th>Nombre del Proyecto</th>
                    <th>Área</th>
                    <th>Objectivo</th>
                    <th>No. de estudiantes</th>
                    <th>Applicante</th>
                    <th>Dirección</th>
                    <th>Nombre del Contacto</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Periodo</th>
                    <th>Estatus</th>
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($residents as $residents)
                    <tr>
                        <td>{!! $residents->name_project !!}</td>
                        <td>{!! $residents->area !!}</td>
                        <td>{!! $residents->objective !!}</td>
                        <td>{!! $residents->students !!}</td>
                        <td>{!! $residents->applicant !!}</td>
                        <td>{!! $residents->address !!}</td>
                        <td>{!! $residents->contact !!}</td>
                        <td>{!! $residents->phone !!}</td>
                        <td>{!! $residents->cel !!}</td>
                        <td>{!! $residents->email !!}</td>
                        <td>{!! $residents->status !!}</td>
                        <td>{!! $residents->period !!}</td>
                        <td>
                            <a href="{!! route('residents.edit', [$residents->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{!! route('residents.delete', [$residents->id]) !!}" onclick="return confirm('Are you sure wants to delete this Residents?')"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
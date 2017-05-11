@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Vacantes</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('vacancyAdmins.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($vacancyAdmins->isEmpty())
        <div class="well text-center">No se encontraron solicitudes de vacantes.</div>
        @else
        <div class="table-responsive">
        <table class="table" id="myTable">
            <thead>
                <th>Posicion</th>
                    <th>Tareas a realizar</th>
                    <th>Habilidades</th>
                    <th>Área</th>
                    <th>Salario</th>
                    <th>Nombre del Contacto</th>
                    <th>Teléfono del Contacto</th>
                    <th>Correo Electrónico</th>
                    <th>Periodo</th>
                    <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($vacancyAdmins as $vacancyAdmin)
                <tr>
                    <td>{!! $vacancyAdmin->position !!}</td>
                    <td>{!! $vacancyAdmin->task !!}</td>
                    <td>{!! $vacancyAdmin->abilities !!}</td>
                    <td>{!! $vacancyAdmin->area !!}</td>
                    <td>{!! $vacancyAdmin->salary !!}</td>
                    <td>{!! $vacancyAdmin->contact !!}</td>
                    <td>{!! $vacancyAdmin->phone !!}</td>
                    <td>{!! $vacancyAdmin->email !!}</td>
                    <td>{!! $vacancyAdmin->period !!}</td>
                    <td>
                        <a href="{!! route('vacancyAdmins.edit', [$vacancyAdmin->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('vacancyAdmins.delete', [$vacancyAdmin->id]) !!}" onclick="return confirm('Are you sure wants to delete this VacancyAdmin?')"><i class="glyphicon glyphicon-remove"></i></a>
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
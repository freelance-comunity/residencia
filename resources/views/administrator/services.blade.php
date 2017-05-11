@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Servicio Social</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('services.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($services->isEmpty())
        <div class="well text-center">No se encontraron solicitudes de servicio social.</div>
        @else
        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead>
                    <th>Tareas a realiza</th>
                    <th>Área</th>
                    <th>Correo Electrónico</th>
                    <th>Periodo</th>
                    <th width="50px">Acción</th>
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
        </div>
        @endif
    </div>
</div>
@endsection
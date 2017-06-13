@extends('layouts.app')

@section('contentheader_title')
Lista de solicitudes para:
@endsection
@section('main-content')
<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Mis Solicitudes Para Residentes</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('residentAdmins.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($residentAdmins->isEmpty())
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

            @foreach($residentAdmins as $residentAdmin)
            <tr>
                <td>{!! $residentAdmin->name_project !!}</td>
                <td>{!! $residentAdmin->area !!}</td>
                <td>{!! $residentAdmin->objetive !!}</td>
                <td>{!! $residentAdmin->students !!}</td>
                <td>{!! $residentAdmin->applicant !!}</td>
                <td>{!! $residentAdmin->address !!}</td>
                <td>{!! $residentAdmin->contact !!}</td>
                <td>{!! $residentAdmin->phone !!}</td>
                <td>{!! $residentAdmin->cel !!}</td>
                <td>{!! $residentAdmin->email !!}</td>
                <td>{!! $residentAdmin->period !!}</td>
                <td>{!! $residentAdmin->status !!}</td>
                <td>
                    <a href="{!! route('residentAdmins.edit', [$residentAdmin->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('residentAdmins.delete', [$residentAdmin->id]) !!}" onclick="return confirm('Are you sure wants to delete this ResidentAdmin?')"><i class="glyphicon glyphicon-remove"></i></a>
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
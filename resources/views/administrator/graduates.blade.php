@extends('layouts.app')

@section('main-content')
@section('title')
Egresados
@endsection
<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Egresados registrados</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{{ url('create-graduate') }}">Crear nuevo egresado</a>
    </div>

    <div class="row">
        @if($graduates->isEmpty())
        <div class="well text-center">No hay ningun egresado registrado.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Nombre (s)</th>
                <th>Apellidos</th>
                <th>Curp</th>
                <th>Sexo</th>
                <th>Fecha de Nacimiento</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>
               
                @foreach($graduates as $graduate)
                <tr>
                    <td>{!! $graduate->name !!}</td>
                    <td>{!! $graduate->last_name !!}</td>
                    <td>{!! $graduate->curp !!}</td>
                    <td>{!! $graduate->sex !!}</td>
                    <td>{!! $graduate->birthday !!}</td>
                    <td>{!! $graduate->address !!}</td>
                    <td>{!! $graduate->phone !!}</td>
                    <td>
                        <a href="{!! route('graduates.edit', [$graduate->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('graduates.delete', [$graduate->id]) !!}" onclick="return confirm('Are you sure wants to delete this Graduate?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
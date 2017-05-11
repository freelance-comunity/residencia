@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Periodos</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('periods.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($periods->isEmpty())
        <div class="well text-center">No hay Periodos Registrados.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Nombre</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Termino</th>
                <th>Estatus</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($periods as $period)
                <tr>
                    <td>{!! $period->name !!}</td>
                    <td>{!! $period->date_start !!}</td>
                    <td>{!! $period->date_end !!}</td>
                    <td>
                        @if ($period->status == 1)
                        <button class="btn bg-olive">ACTIVO</button>
                        @else
                        <button class="btn bg-red">INACTIVO</button>
                        @endif
                    </td>
                    <td>
                        <a href="{!! route('periods.edit', [$period->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('periods.delete', [$period->id]) !!}" onclick="return confirm('Are you sure wants to delete this Period?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
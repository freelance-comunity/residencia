@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Preguntas de encuesta</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('tests.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($tests->isEmpty())
        <div class="well text-center">No hay ninguna pregunta guardada.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Número</th>
                <th>Titulo</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>
               
                @foreach($tests as $test)
                <tr>
                    <td>{!! $test->number !!}</td>
                    <td>{!! $test->title !!}</td>
                    <td>
                        <a href="{!! route('tests.edit', [$test->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('tests.delete', [$test->id]) !!}" onclick="return confirm('Are you sure wants to delete this Test?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
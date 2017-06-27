@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')
    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Encuestas</h1>
        <a class="uppercase btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('surveys.create') !!}">Agregar nueva</a>
    </div>

    <div class="row">
        @if($surveys->isEmpty())
        <div class="well text-center">No hay Encuestas guardadas.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Estatus</th>
                <th>Preguntas</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>
                @foreach($surveys as $survey)
                @include('surveys.addModal')
                <tr class="success">
                    <td>{!! $survey->survey_title !!}</td>
                    <td>{!! $survey->survey_text !!}</td>
                    <td>{!! $survey->survey_status !!}</td>
                    <td>
                        <button 
                        type="button" 
                        class="btn btn-primary btn-lg" 
                        data-toggle="modal" 
                        data-target="#addModal">
                        Agregar
                    </button>
                    <a href="{{ url('viewQuestions') }}/{{ $survey->id }}" class="btn bg-teal btn-lg">Ver</a>
                </td>
                <td>
                    <a href="{!! route('surveys.edit', [$survey->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('surveys.delete', [$survey->id]) !!}" onclick="return confirm('Are you sure wants to delete this Survey?')"><i class="glyphicon glyphicon-remove"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
@endsection
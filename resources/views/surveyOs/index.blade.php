@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')
    <div class="row">
        <h1 class="pull-left">Opciones de la pregunta "{{$question->q_text}}"</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{{ url('create-option') }}/{{$question->id}}">Agregar Opción</a>
    </div>
   
    <div class="row">
        @if($surveyOs->isEmpty())
        <div class="well text-center">No hay opciones registradas.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Texto</th>
                <th>Value</th>
                <th>ID encuesta</th>
                <th>ID pregunta</th>
                <th>Estatus</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($surveyOs as $surveyO)
                <tr>
                    <td>{!! $surveyO->o_text !!}</td>
                    <td>{!! $surveyO->o_value !!}</td>
                    <td>{!! $surveyO->survey_id !!}</td>
                    <td>{!! $surveyO->survey_q_id !!}</td>
                    <td>{!! $surveyO->o_status !!}</td>
                    <td>
                        <a href="{!! route('surveyOs.edit', [$surveyO->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('surveyOs.delete', [$surveyO->id]) !!}" onclick="return confirm('Are you sure wants to delete this Survey_o?')"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection
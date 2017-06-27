@extends('layouts.app')

@section('main-content')
@section('title')
Egresados
@endsection
<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Directorio de Egresados</h1>
    </div>
    <div id="search">
        <div class="row">
            @if($graduates->isEmpty())
            <div class="well text-center">No Graduates found.</div>
            @else
            <table class="table table-hover" id="period">
                <thead>
                    <th>Nombre(s)</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Telefóno</th>
                    <th>Correo</th>
                    <th>Periodo de Egreso</th>
                    <th>Empresa donde labora</th>
                </thead>
                <tbody>

                    @foreach($graduates as $graduate)
                    @php
                    $poll = $graduate->poll;
                    @endphp
                    <tr class="success">
                        <td>{!! $graduate->name !!}</td>
                        <td>{!! $graduate->last_name !!}</td>
                        <td>{!! $graduate->address !!}</td>
                        <td>{!! $graduate->phone !!}</td>
                        <td>{!! $graduate->user->email !!}</td>
                        @if (is_null($poll))
                        <td>No se ha registrado periodo</td>
                        <td>No se ha registrado empresa</td>
                        @else
                        <td>{!! $poll->question_5 !!}</td>
                        <td>{!! $poll->question_9 !!}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection
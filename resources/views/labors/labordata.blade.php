@extends('layouts.app')
@section('title')
Mis datos laborales
@endsection
@section('main-content')

<div class="container">

    @include('sweet::alert')

    <div class="row">
        <table class="table" id="myTable">
            <thead>
                <th>Nombre de la Empresa</th>
                <th>Teléfono de la Empresa</th>
                <th>Puesto Ocupado</th>
                <th>Area de Trabajo</th>
                <th>Salario</th>
                <th>Sector</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                <tr>
                <td>{!! $labor->company_name !!}</td>
                    <td>{!! $labor->company_phone !!}</td>
                    <td>{!! $labor->position !!}</td>
                    <td>{!! $labor->work_area !!}</td>
                    <td>{!! $labor->salary !!}</td>
                    <td>{!! $labor->sector !!}</td>
                    <td>
                        <a class=" upperacase btn btn-success btn-block" href="{!! route('labors.edit', [$labor->id]) !!}">EDITAR</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
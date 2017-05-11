    @extends('layouts.app')
    @section('contentheader_title')
    Lista de solicitudes para:
    @endsection
    @section('main-content')

    <div class="container">

        @include('sweet::alert')

        <div class="row">
        <h1 class="pull-left">Servicio Social</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('serviceAdmins.create') !!}">Agregar Nuevo</a>
        </div>

        <div class="row">
            @if($serviceAdmins->isEmpty())
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

                        @foreach($serviceAdmins as $serviceAdmin)
                        <tr>
                            <td>{!! $serviceAdmin->task !!}</td>
                            <td>{!! $serviceAdmin->area !!}</td>
                            <td>{!! $serviceAdmin->contact !!}</td>
                            <td>{!! $serviceAdmin->period !!}</td>
                            <td>
                                <a href="{!! route('serviceAdmins.edit', [$serviceAdmin->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('serviceAdmins.delete', [$serviceAdmin->id]) !!}" onclick="return confirm('Are you sure wants to delete this ServiceAdmin?')"><i class="glyphicon glyphicon-remove"></i></a>
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
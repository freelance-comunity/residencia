@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')

       <!-- <div class="row">
            <h1 class="pull-left">Companies</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('companies.create') !!}">Add New</a>
        </div>-->

        <div class="row">
            @if($companies->isEmpty())
            <div class="well text-center">No se encontraron Empresas</div>
            @else
            <table class="table" id="myTable">
                <thead>
                    <th>Nombre</th>
                    <th>Director</th>
                    <th>Contacto</th>
                   
                    <th width="50px">Acción</th>
                </thead>
                <tbody>

                    @foreach($companies as $company)
                    <tr>
                        <td>{!! $company->name !!}</td>
                        <td>{!! $company->director !!}</td>
                        <td>{!! $company->contact !!}</td>
                      
                        <td>
                            <a href="{!! url('view-company', [$company->id]) !!}" class="btn bg-navy")"><i class="fa fa-trash"></i> Ver Perfil</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    @endsection
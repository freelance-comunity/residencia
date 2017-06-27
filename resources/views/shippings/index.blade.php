@extends('layouts.app')

@section('main-content')

<div class="container">

    @include('flash::message')
    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Correos Masivos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('shippings.create') !!}">Agregar Nuevo</a>
    </div>

    <div class="row">
        @if($shippings->isEmpty())
        <div class="well text-center">No hay ningun correo redactado.</div>
        @else
        <table class="table" id="myTable">
            <thead>
                <th>Titulo</th>
                <th>Cuerpo</th>
                <!-- <th>Archivo</th> -->
                <th>Envío</th>
                <th width="50px">Acción</th>
            </thead>
            <tbody>

                @foreach($shippings as $shipping)
                <tr>
                    <td>{!! $shipping->title !!}</td>
                    <td>{!! $shipping->body !!}</td>
                    <!-- <td>{!! $shipping->file !!}</td> -->
                    <td>
                     <a href="{{ url('mails') }}/{{$shipping->id}}" class="btn bg-navy btn-lg"><i class="fa fa-send"></i> Enviar</a>
                 </td>
                 <td>
                    <a href="{!! route('shippings.edit', [$shipping->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{!! route('shippings.delete', [$shipping->id]) !!}" onclick="return confirm('Are you sure wants to delete this Shipping?')"><i class="glyphicon glyphicon-remove"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
@endsection
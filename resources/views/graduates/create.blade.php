@extends('layouts.app')
@section('title')
Crear Egresados
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'graduates.store']) !!}

        @include('graduates.fields')

    {!! Form::close() !!}
</div>
@endsection

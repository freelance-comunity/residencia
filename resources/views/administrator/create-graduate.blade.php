@extends('layouts.app')
@section('title')
Crear Egresados
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['url' => 'create-graduate']) !!}

        @include('administrator.fields-create-graduate')

    {!! Form::close() !!}
</div>
@endsection

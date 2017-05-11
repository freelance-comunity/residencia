@extends('layouts.app')
@section('contentheader_title')
Lllenar Encuesta de Seguimiento
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'polls.store']) !!}

        @include('polls.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')
@section('title')
	Encuesta
@endsection
@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'polls.store']) !!}

        @include('polls.fields')

    {!! Form::close() !!}
</div>
@endsection

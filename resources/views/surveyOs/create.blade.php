@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'surveyOs.store']) !!}

        @include('surveyOs.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'surveyAs.store']) !!}

        @include('surveyAs.fields')

    {!! Form::close() !!}
</div>
@endsection

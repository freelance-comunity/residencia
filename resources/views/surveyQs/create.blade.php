@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'surveyQs.store']) !!}

        @include('surveyQs.fields')

    {!! Form::close() !!}
</div>
@endsection

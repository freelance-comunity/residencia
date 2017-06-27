@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($surveyO, ['route' => ['surveyOs.update', $surveyO->id], 'method' => 'patch']) !!}

        @include('surveyOs.fields')

    {!! Form::close() !!}
</div>
@endsection

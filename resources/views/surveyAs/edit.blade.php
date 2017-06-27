@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($surveyA, ['route' => ['surveyAs.update', $surveyA->id], 'method' => 'patch']) !!}

        @include('surveyAs.fields')

    {!! Form::close() !!}
</div>
@endsection

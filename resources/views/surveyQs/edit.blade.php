@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($surveyQ, ['route' => ['surveyQs.update', $surveyQ->id], 'method' => 'patch']) !!}

        @include('surveyQs.fields')

    {!! Form::close() !!}
</div>
@endsection

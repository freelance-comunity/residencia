@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($survey, ['route' => ['surveys.update', $survey->id], 'method' => 'patch']) !!}

        @include('surveys.fields')

    {!! Form::close() !!}
</div>
@endsection

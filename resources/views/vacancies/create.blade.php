@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'vacancies.store']) !!}

        @include('vacancies.fields')

    {!! Form::close() !!}
</div>
@endsection

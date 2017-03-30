@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($vacancy, ['route' => ['vacancies.update', $vacancy->id], 'method' => 'patch']) !!}

        @include('vacancies.fields')

    {!! Form::close() !!}
</div>
@endsection

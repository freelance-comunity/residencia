@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')
    @include('sweet::alert')

    {!! Form::open(['route' => 'tests.store']) !!}

        @include('tests.fields')

    {!! Form::close() !!}
</div>
@endsection

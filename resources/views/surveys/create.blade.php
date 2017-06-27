@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'surveys.store']) !!}

        @include('surveys.fields')

    {!! Form::close() !!}
</div>
@endsection

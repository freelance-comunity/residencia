@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'residents.store']) !!}

        @include('residents.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'depis.store']) !!}

        @include('depis.fields')

    {!! Form::close() !!}
</div>
@endsection

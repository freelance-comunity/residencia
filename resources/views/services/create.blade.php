@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'services.store']) !!}

        @include('services.fields')

    {!! Form::close() !!}
</div>
@endsection

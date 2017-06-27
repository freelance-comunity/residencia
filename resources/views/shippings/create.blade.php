@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'shippings.store']) !!}

        @include('shippings.fields')

    {!! Form::close() !!}
</div>
@endsection

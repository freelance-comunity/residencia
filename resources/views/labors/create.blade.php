@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'labors.store']) !!}

        @include('labors.fields')

    {!! Form::close() !!}
</div>
@endsection

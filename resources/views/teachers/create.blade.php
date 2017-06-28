@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

     {!! Form::open(['url' => 'create-teacher']) !!}

        @include('teachers.fields')

    {!! Form::close() !!}
</div>
@endsection

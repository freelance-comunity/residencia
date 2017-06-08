@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'teachers.store']) !!}

        @include('teachers.fields')

    {!! Form::close() !!}
</div>
@endsection

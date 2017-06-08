@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($teacher, ['route' => ['teachers.update', $teacher->id], 'method' => 'patch']) !!}

        @include('teachers.fields')

    {!! Form::close() !!}
</div>
@endsection

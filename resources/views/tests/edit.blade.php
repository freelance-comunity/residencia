@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($test, ['route' => ['tests.update', $test->id], 'method' => 'patch']) !!}

        @include('tests.fields')

    {!! Form::close() !!}
</div>
@endsection

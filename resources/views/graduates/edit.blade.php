@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($graduate, ['route' => ['graduates.update', $graduate->id], 'method' => 'patch']) !!}

        @include('graduates.fields')

    {!! Form::close() !!}
</div>
@endsection

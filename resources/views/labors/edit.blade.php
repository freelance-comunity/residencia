@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($labor, ['route' => ['labors.update', $labor->id], 'method' => 'patch']) !!}

        @include('labors.fields')

    {!! Form::close() !!}
</div>
@endsection

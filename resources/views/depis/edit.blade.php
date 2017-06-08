@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($depi, ['route' => ['depis.update', $depi->id], 'method' => 'patch']) !!}

        @include('depis.fields')

    {!! Form::close() !!}
</div>
@endsection

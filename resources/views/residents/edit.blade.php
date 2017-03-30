@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($residents, ['route' => ['residents.update', $residents->id], 'method' => 'patch']) !!}

        @include('residents.fields')

    {!! Form::close() !!}
</div>
@endsection

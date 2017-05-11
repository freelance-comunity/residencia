@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'residentAdmins.store']) !!}

        @include('residentAdmins.fields')

    {!! Form::close() !!}
</div>
@endsection

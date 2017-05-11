@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'serviceAdmins.store']) !!}

        @include('serviceAdmins.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'vacancyAdmins.store']) !!}

        @include('vacancyAdmins.fields')

    {!! Form::close() !!}
</div>
@endsection

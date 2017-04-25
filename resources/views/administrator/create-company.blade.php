@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

   {!! Form::open(['url' => 'create-company']) !!}

        @include('administrator.fields-company')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'companies.store']) !!}

        @include('companies.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($shipping, ['route' => ['shippings.update', $shipping->id], 'method' => 'patch']) !!}

        @include('shippings.fields')

    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($serviceAdmin, ['route' => ['serviceAdmins.update', $serviceAdmin->id], 'method' => 'patch']) !!}

        @include('serviceAdmins.fields')

    {!! Form::close() !!}
</div>
@endsection

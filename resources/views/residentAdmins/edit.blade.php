@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($residentAdmin, ['route' => ['residentAdmins.update', $residentAdmin->id], 'method' => 'patch']) !!}

        @include('residentAdmins.fields')

    {!! Form::close() !!}
</div>
@endsection

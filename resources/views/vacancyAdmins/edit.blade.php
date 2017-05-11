@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($vacancyAdmin, ['route' => ['vacancyAdmins.update', $vacancyAdmin->id], 'method' => 'patch']) !!}

        @include('vacancyAdmins.fields')

    {!! Form::close() !!}
</div>
@endsection

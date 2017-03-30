@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'patch']) !!}

        @include('companies.fields')

    {!! Form::close() !!}
</div>
@endsection

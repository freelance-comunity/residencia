@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($poll, ['route' => ['polls.update', $poll->id], 'method' => 'patch']) !!}

        @include('polls.fields')

    {!! Form::close() !!}
</div>
@endsection

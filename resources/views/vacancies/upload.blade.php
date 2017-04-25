@extends('layouts.app')

@section('contentheader_title')
subir foto
@endsection
@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <img src="{{ asset('/img/uploads/') }}/{{$vacancy->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; " alt="">
      
      <form action="{{ url('/vacancyphoto') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <label for="">Actualizar foto</label>
        <input type="file" name="photo">
        <input type="hidden" value="{{$vacancy->id}}" name="_token">
        <br>
        <input type="submit" value="Actualizar" class="uppercase btn btn-success">
         
      </form>
    </div>
  </div>
</div>
@endsection



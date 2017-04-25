@extends('layouts.app')

@section('main-content')
@section('title')
Mis datos personales
@endsection
<div class="container">

	@include('sweet::alert')

	<div class="row">
		<h1 class="pull-left">Mis datos</h1>
	</div>

	<div class="row">
		<table class="table" id="myTable">
			<thead>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Curp</th>
				<th>Sexo</th>
				<th>Fecha de Nacimiento</th>
				<th>Dirección</th>
				<th>Teléfono</th>
				<th width="50px">Acción</th>
			</thead>
			<tbody>          
				<tr>
					<td>{!! $graduate->name !!}</td>
					<td>{!! $graduate->last_name !!}</td>
					<td>{!! $graduate->curp !!}</td>
					<td>{!! $graduate->sex !!}</td>
					<td>{!! $graduate->birthday !!}</td>
					<td>{!! $graduate->address !!}</td>
					<td>{!! $graduate->phone !!}</td>
					<td>
						<a class="uppercase btn btn-success btn-block" href="{!! route('graduates.edit', [$graduate->id]) !!}">editar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
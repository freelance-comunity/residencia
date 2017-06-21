@extends('layouts.app')

@section('main-content')

<div class="container">

	@include('flash::message')

	<div class="row">
		<h1 class="pull-left">Depis</h1>
		<a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('depis.create') !!}">Agregar Nuevo</a>
	</div>

	<div class="row">
		@if($depis->isEmpty())
		<div class="well text-center">No Depis found.</div>
		@else
		<div class="table-responsive">
			<table class="table" id="myTable">
				<thead>
					<th>Nombre del Proyecto</th>
					<th>Línea de Investigación</th>
					<th>Nombre la Residencia</th>
					<th>Nombres de los residentes</th>
					<th>Nombre de laTesis</th>
					<th>Nombres de los Tesistas</th>
					<th>Publicaciones</th>
					<th>Número de Publicaciones</th>
					<th>Nombre de la Revista</th>
					<th>Tipo de Publicación</th>
					<th>Nombre del Articulo</th>
					<th>Prototipo</th>
					<th>Patente</th>
					<th>Vigencia del</th>
					<th>Hasta</th>
					<th>Otros logros</th>
					<th width="50px">Acción</th>
				</thead>
				<tbody>

					@foreach($depis as $depi)
					<tr>
						<td>{!! $depi->name_project !!}</td>
						<td>{!! $depi->line_investigation !!}</td>
						<td>{!! $depi->name_residence !!}</td>
						<td>{!! $depi->names_residents !!}</td>
						<td>{!! $depi->name_tesis !!}</td>
						<td>{!! $depi->names_tesis !!}</td>
						<td>{!! $depi->publications !!}</td>
						<td>{!! $depi->publications_number !!}</td>
						<td>{!! $depi->name_magazine !!}</td>
						<td>{!! $depi->type_publication !!}</td>
						<td>{!! $depi->name_article !!}</td>
						<td>{!! $depi->prototype !!}</td>
						<td>{!! $depi->patents !!}</td>
						<td>{!! $depi->validity_of !!}</td>
						<td>{!! $depi->valid_at !!}</td>
						<td>{!! $depi->others !!}</td>
						<td>
							<a href="{!! route('depis.edit', [$depi->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
							<a href="{!! route('depis.delete', [$depi->id]) !!}" onclick="return confirm('Are you sure wants to delete this Depi?')"><i class="glyphicon glyphicon-remove"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
			@endif
		</div>
	</div>
	@endsection
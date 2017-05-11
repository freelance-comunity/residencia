@extends('layouts.app')
@section('contentheader_title')
Ver Vacantes de Empleo
@endsection
@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@if($vacancies->isEmpty())
			<div class="well text-center">No Hay Vacantes Disponibles.</div>
			@else
			@foreach ($vacancies as $element)
			<div class="form-group col-sm-6 col-lg-6">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-{{ ratingColor($element->id) }}">
						<div class="widget-user-image">
							<img class="img-circle" src="{{ asset('images/work_icon.png') }}" alt="User Avatar">
						</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">{{$element->position}}</h3>
						<h5 class="widget-user-desc">{{$element->task}}</h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Abilidades requeridas: <span class="badge bg-green">{{$element->abilities}}</span></a></li>
							<li><a href="#">Área de trabajo: <span class="badge bg-aqua">{{$element->area}}</span></a></li>
							<li><a href="#">Salario: <span class="badge bg-yellow">${{$element->salary}}</span></a></li>
							<li><a href="#">Contacto: <span class="badge bg-red">{{$element->email}}</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /.widget-user -->
			</div>
			@endforeach
			@endif
			@php
				$adminvacancies = App\Models\VacancyAdmin::all();
			@endphp
			@if($adminvacancies->isEmpty())
			@else
			@foreach ($adminvacancies as $vacancy)
			<div class="form-group col-sm-6 col-lg-6">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-{{ ratingColor($vacancy->id) }}">
						<div class="widget-user-image">
							<img class="img-circle" src="{{ asset('images/work_icon.png') }}" alt="User Avatar">
						</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">{{$vacancy->position}}</h3>
						<h5 class="widget-user-desc">{{$vacancy->task}}</h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Abilidades requeridas: <span class="badge bg-green">{{$vacancy->abilities}}</span></a></li>
							<li><a href="#">Área de trabajo: <span class="badge bg-aqua">{{$vacancy->area}}</span></a></li>
							<li><a href="#">Salario: <span class="badge bg-yellow">${{$vacancy->salary}}</span></a></li>
							<li><a href="#">Contacto: <span class="badge bg-red">{{$vacancy->email}}</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /.widget-user -->
			</div>
			@endforeach
			@endif
		</div>
	</div>
</div>
@endsection

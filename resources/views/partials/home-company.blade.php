@section('contentheader_title')
Bienvenido de Nuevo, {{Auth::user()->name}}
@endsection
@php
$vacancies = App\Models\Vacancy::all()->count();
$residents = App\Models\Residents::all()->count();
$service = App\Models\Service::all()->count();
@endphp
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<h3>{{$vacancies}}</h3>

				<p>Vacantes Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('allvacancies') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-black">
			<div class="inner">
				<h3>{{$residents}}</h3>

				<p>Residentes Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('allresidents') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-primary">
			<div class="inner">
				<h3>{{$service}}</h3>

				<p>Servicio Social Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('allservices') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
</div>
<!-- /.col -->
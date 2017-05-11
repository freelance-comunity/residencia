@extends('layouts.app')
@section('contentheader_title')
Datos de Encuesta
@endsection
@section('main-content')
<div class="container">
	
	
	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">
				@include('sweet::alert')
				<!-- Profile Image -->
				<div class="box box-danger">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="{{$graduate->user->avatar}}" alt="User profile picture">
						<h3 class="profile-username text-center">{{ $graduate->name }} {{$graduate->last_name}}</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">							
								<b>Email</b> <a href="#" class="pull-right">{{$graduate->user->email}}</a>
							</li>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
					<!-- About Me Box -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Datos Generales</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<strong><i class="fa fa-qrcode margin-r-5"></i> Curp</strong>
							<p class="text-muted">
								{{$graduate->curp}}
							</p>
							<hr>
							<strong><i class="fa fa-mobile margin-r-5"></i> Teléfono celular</strong>
							<p class="text-muted">{{$graduate->phone}}</p>
							<hr>
							<strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
							<p class="text-muted">{{$graduate->address}}</p>
							<hr>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
				<div class="col-md-9">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#timeline" data-toggle="tab">Datos de Encuesta</a></li>
						</ul>
						<div class="tab-content">
							<!-- /.tab-pane -->
							<div class="active tab-pane" id="timeline">
								<!-- The timeline -->
								<ul class="timeline timeline-inverse">
									<!-- timeline time label -->
									<!-- /.timeline-label -->
									<!-- timeline item -->
									<ul class="timeline">
										<!-- timeline item -->
										<li>
											<!-- timeline icon -->
											<i class="fa fa-file bg-red"></i>
											<div class="timeline-item">
												<span class="time"> Creado el: {{$graduate->created_at}}</span>

												<h3 class="timeline-header"><a>Respuestas</a></h3>
												@if(is_null($graduate->poll))
												<div class="well text-center">Aún no se han registrado datos de la encuesta.</div>	
												@else
												<div class="timeline-body">            		
													<strong>Página de Facebook o Twitter: </strong>{{ $graduate->poll->question_4}} <br>
													<strong>Periodo de Egreso: </strong>{{ $graduate->poll->question_5}} <br>
													<strong>Titulado: </strong>{{ $graduate->poll->question_6}} <br>
													<strong>¿Cuánto tiempo tardo en encontrar su primer empleo después de egresar?: </strong>{{ $graduate->poll->question_7}} <br>	
													<strong>¿Por qué medio obtuvo su trabajo actual?: </strong>{{ $graduate->poll->question_8}} <br>	
													<strong>Nombre de la empresa, institución u prganización en que labora actualmente: </strong>{{ $graduate->poll->question_9}} <br>
													<strong>Tipo de institución en la que labora: </strong>{{ $graduate->poll->question_10}} <br>
													<strong>Menciona el sector económico al que pertenece la empresa u organización en la que labora: </strong>{{ $graduate->poll->question_11}} <br>
													<strong>¿Qué tan relacionado con sus estudios de licenciatura está el trabajo que actualmente desempeña?: </strong>{{ $graduate->poll->question_12}} <br>
													<strong>La formación obtenida en el instituto le permitió responder a las demandas de: </strong>{{ $graduate->poll->question_13}} <br>
													<strong>En qué área te desempeñas actualmente: </strong>{{ $graduate->poll->question_14}} <br>
													<strong>Comentarios: </strong>{{ $graduate->poll->comment}} <br>
												</div>
												@endif
												<!--<a href="{!! route('graduates.edit', [$graduate->id]) !!}" class="btn btn-default">Editar</a>-->
											</div>
										</li>
									</ul>
								</ul>
								<a href="" class="uppercase btn bg-navy"><span class="fa fa-file-pdf-o"></span> descargar</a>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
		@endsection

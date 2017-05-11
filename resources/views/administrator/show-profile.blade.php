@extends('layouts.app')
@section('contentheader_title')
Mis datos
@endsection
@section('main-content')
<div class="container">
	
	
	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">
				@include('sweet::alert')
				<!-- Profile Image -->
				<div class="box box-primary">
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
							<li class="active"><a href="#timeline" data-toggle="tab">Datos</a></li>
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
											<i class="fa fa-user bg-blue"></i>
											<div class="timeline-item">
												<span class="time"> Creado el: {{$graduate->created_at}}</span>

												<h3 class="timeline-header"><a>Datos Generales</a></h3>

												<div class="timeline-body">            		
													<strong>Fecha de nacimiento: </strong>{{ $graduate->birthday}} <br>
													<strong>Teléfono celular:</strong> {{ $graduate->phone}} <br>
													<strong>Correo electrónico:</strong> {{ $graduate->user->email}} <br>	
													<strong>Dirección:</strong> {{ $graduate->address}} <br>	
													<strong>CURP:</strong> {{$graduate->curp}} <br>	
													<strong>Sexo:</strong> {{$graduate->sex}} <br>	
												</div>
												<a href="{!! route('graduates.edit', [$graduate->id]) !!}" class="btn btn-default">Editar</a>
											</div>
										</li>
										<!-- timeline item -->
										<li>
											<!-- timeline icon -->
											<i class="fa fa-suitcase bg-red"></i>
											<div class="timeline-item">
												<span class="time"> Creado el: {{$graduate->created_at}}</span>
												@if(is_null($graduate->labor))
												<h3 class="timeline-header"><a href="#">Datos Laborales</a></h3>
												<div class="well text-center">Aún no se han registrado datos laborales.</div>	
												@else
												<h3 class="timeline-header"><a>Datos Laborales</a></h3>					
												<div class="timeline-body">            		
													<strong>Nombre de la Empresa: </strong>{{ $graduate->labor->company_name}} <br>
													<strong>Teléfono de la Empresa:</strong> {{ $graduate->labor->company_phone}} <br>
													<strong>Puesto Ocupado:</strong> {{ $graduate->labor->position}} <br>	
													<strong>Área de Trabajo:</strong> {{ $graduate->labor->work_area}} <br>	
													<strong>Salario Percibido:</strong> ${{$graduate->labor->salary}}.00 <br>	
													<strong>Sector:</strong> {{$graduate->labor->sector}} <br>	
												</div>
												<a href="{!! route('labors.edit', [$graduate->labor->id]) !!}" class="btn btn-default">Editar</a>
												@endif
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

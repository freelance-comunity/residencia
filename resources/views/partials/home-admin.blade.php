@section('contentheader_title')
Bienvenido de Nuevo, {{Auth::user()->name}}
@endsection
@php
$graduates = App\Models\Graduate::all()->count();
$companies = App\Models\Company::all()->count();
$vacancies = App\Models\Vacancy::all()->count();
$residents = App\Models\Residents::all()->count();
$service = App\Models\Service::all()->count();
$vacancyAdmins = App\Models\VacancyAdmin::all()->count();
$residentAdmins = App\Models\ResidentAdmin::all()->count();
$serviceAdmins = App\Models\ServiceAdmin::all()->count();
@endphp
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{$graduates}}</h3>

				<p>Egresados Registrados</p>
			</div>
			<div class="icon">
				<i class="fa fa-graduation-cap"></i>
			</div>
			<a href="{{ url('allgraduates') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3>{{$companies}}<sup style="font-size: 20px"></sup></h3>

				<p>Empresas Registradas</p>
			</div>
			<div class="icon">
				<i class="fa fa-building"></i>
			</div>
			<a href="{{ url('allcompanies') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>44</h3>

				<p>Docentes Registrados</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
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
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>{{$vacancyAdmins}}</h3>

				<p>Mis Vacantes Disponibles</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('vacancyAdmins') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-maroon">
			<div class="inner">
				<h3>{{$residentAdmins}}</h3>

				<p>Mis Solicitudes de Residentes</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('residentAdmins') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-olive">
			<div class="inner">
				<h3>{{$serviceAdmins}}</h3>

				<p>Mis Solicitudes de Servicio Social</p>
			</div>
			<div class="icon">
				<i class="fa fa-suitcase"></i>
			</div>
			<a href="{{ url('serviceAdmins') }}" class="small-box-footer">
				Ver <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
</div>
<div class="col-md-6">
	<!-- DIRECT CHAT -->
	<div class="box box-warning direct-chat direct-chat-warning">
		<div class="box-header with-border">
			<h3 class="box-title">Chats conmigo</h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contactos" data-widget="chat-pane-toggle">
					<i class="fa fa-comments"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			@php
			Talk::setAuthUserId(Auth::user()->id);
			$threads = Talk::threads();
			@endphp
			<div class="box-body">
				<!-- Conversations are loaded here -->
				<div class="direct-chat-messages">
					<!-- Message. Default to the left -->
					@foreach ($threads as $inbox)
					@if(!is_null($inbox->thread))
					<div class="direct-chat-msg">
						<a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-name pull-left">{{$inbox->withUser->name}}</span>
								<span class="direct-chat-timestamp pull-right">{{$inbox->thread->humans_time}}</span>
							</div>
							<!-- /.direct-chat-info -->
							<img class="direct-chat-img" src="{{$inbox->withUser->avatar}}" alt="message user image"><!-- /.direct-chat-img -->
							<div class="direct-chat-text">
								<div class="status">
									@if(auth()->user()->id == $inbox->thread->sender->id)
									<span class="fa fa-reply"></span>
									@endif
									<span>{{substr($inbox->thread->message, 0, 30)}}...</span>
								</div>
							</div>
							<!-- /.direct-chat-text -->
						</div>
					</a>
					@endif
					@endforeach
					<!-- /.direct-chat-msg -->
				</div>
				<!--/.direct-chat-messages-->
				@php
				$role = Auth::user()->role;
				$graduate = App\Role::where('name', 'graduate')->first();
				$graduates = $graduate->users; 
				@endphp
				<!-- Contacts are loaded here -->
				<div class="direct-chat-contacts">
					<ul class="contacts-list">

						@foreach ($graduates as $graduate)
						<li>
							<a href="#">
								<img class="contacts-list-img" src="{{$graduate->avatar}}" alt="graduate Image">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										{{$graduate->name}} {{$graduate->last_name}}
										<small class="contacts-list-date pull-right">2/28/2015</small>
									</span>
									<a href="{{route('message.read', ['id'=>$graduate->id])}}" class="btn btn-success pull-right">Enviar mensaje</a>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						@endforeach
						<!-- End Contact Item -->
					</ul>
					<!-- /.contatcts-list -->
				</div>
				<!-- /.direct-chat-pane -->
			</div>
			<!-- /.box-body -->
		</div>
		<!--/.direct-chat -->
	</div>
	<!-- /.col -->
	@php
	$collection = App\Models\Graduate::all();
	$chunk = $collection->take(-8);

	$chunk->all();
	@endphp
	<div class="col-md-6">
		<!-- USERS LIST -->
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Ultimos Egresados Registrados</h3>

				<div class="box-tools pull-right">
					<span class="label label-danger">{{$chunk->count()}} Nuevos miembros</span>
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body no-padding">
				<ul class="users-list clearfix">
					@foreach ($chunk as $graduate)
					<li>
						<img src="{{$graduate->user->avatar}}" alt="User Image">
						<a class="users-list-name" href="{!! url('viewdatagraduate', [$graduate->id]) !!}">{{$graduate->name}} {{$graduate->last_name}}</a>
						<span class="users-list-date">{{$graduate->created_at}}</span>
					</li>
					@endforeach
				</ul>
				<!-- /.users-list -->
			</div>
			<!-- /.box-body -->
			<div class="box-footer text-center">
				<a href="{{ url('allgraduates') }}" class="uppercase">Ver todos los egresados</a>
			</div>
			<!-- /.box-footer -->
		</div>
		<!--/.box -->
	</div>
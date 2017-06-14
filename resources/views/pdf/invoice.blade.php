<!DOCTYPE html>
<html>
<head>
	<title>{{$data->name}} {{$data->last_name}} | Perfil</title>

	<meta name="viewport" content="width=device-width"/>
	<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
	<meta charset="UTF-8"> 

	<link type="text/css" rel="stylesheet" href="{{ asset('css/pdf/profile/style.css') }}">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
	<div id="cv" class="instaFade">
		<div class="mainDetails">
			<div id="headshot" class="quickFade">
				<img src="{{ $data->user->avatar }}" alt="Alan Smith" />
			</div>

			<div id="name">
				<h1 class="quickFade delayTwo">{{ $data->name }} {{$data->last_name}}</h1>
				<h2 class="quickFade delayThree"></h2>
			</div>

			<div id="contactDetails" class="quickFade delayFour">
				<ul>
					<li>Correo: <a href="#" target="_blank">{{$data->user->email}}</a></li>
					<li>Dirección: <a href="#">{{$data->address}}</a></li>
					<li>CURP: {{$data->curp}}</li>
					<li>Teléfono: {{$data->phone}}</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>

		<div id="mainArea" class="quickFade delayFive">
			<section>
				<div class="sectionTitle">
					<h1>Datos Generales</h1>
				</div>
				@if(is_null($data->labor))
				<div class="sectionContent">Aún no se han registrado datos laborales.</div>
				@else
				<div class="sectionContent">
					<article>
						<p class="subDetails"><strong>Fecha de Nacimiento:</strong></p>
						<p>{{$data->birthday}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Empresa de Trabajo:</strong></p>
						<p>{{ $data->labor->company_name}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Teléfono de la Empresa:</strong></p>
						<p>{{ $data->labor->company_phone}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Puesto Ocupado:</strong></p>
						<p>{{ $data->labor->position}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Área de Trabajo:</strong></p>
						<p>{{ $data->labor->work_area}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Salario Percibido:</strong></p>
						<p>${{ $data->labor->salary}}.00</p>
					</article>
				</div>
				@endif
				<div class="clear"></div>
			</section>
			<section>
				<div class="sectionTitle">
					<h1>Encuesta de Seguimiento</h1>
				</div>
				@if(is_null($data->poll))
				<div class="sectionContent">Aún no se han registrado datos de la encuesta.</div>	
				@else
				<div class="sectionContent">
					<article>
						<p class="subDetails"><strong>Página de Facebook ó Twitter:</strong></p>
						<p>{{$data->poll->question_4}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Periodo de Egreso:</strong></p>
						<p>{{$data->poll->question_5}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Titulado:</strong></p>
						<p>{{$data->poll->question_6}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>¿Cuánto tiempo tardo en encontrar su primer empleo después de egresar?</strong></p>
						<p>{{$data->poll->question_7}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>¿Por qué medio obtuvo su trabajo actual?</strong></p>
						<p>{{$data->poll->question_8}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Nombre de la empresa, institución u prganización en que labora actualmente:</strong></p>
						<p>{{$data->poll->question_9}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Tipo de institución en la que labora:</strong></p>
						<p>{{$data->poll->question_10}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>Menciona el sector económico al que pertenece la empresa u organización en la que labora:</p>
						<p>{{$data->poll->question_11}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>¿Qué tan relacionado con sus estudios de licenciatura está el trabajo que actualmente desempeña?</strong></p>
						<p>{{$data->poll->question_12}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>La formación obtenida en el instituto le permitió responder a las demandas de:</strong></p>
						<p>{{$data->poll->question_13}}.</p>
					</article>
					<article>
						<p class="subDetails"><strong>En qué área te desempeñas actualmente:</strong></p>
						<p>{{$data->poll->question_14}}.</p>
					</article>
				</div>
				@endif
				<div class="clear"></div>
			</section>
		</div>
	</div>
</body>
</html>
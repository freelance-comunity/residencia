@extends('layouts.auth')

@section('title')
Registro de Empresas
@endsection

@section('content')

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="{{ url('/') }}"><b>SED</b>SC</a>
		</div>

		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<div class="register-box-body">
			<p class="login-box-msg">Registro de Empresas</p>
			{!! Form::open(['route' => 'companies.store']) !!}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Nombre de la empresa" name="name" value="{{ old('name') }}"/><span class="fa fa-building form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<select class="form-control" name="sector" id="">
						<option value="Agropecuario">Agropecuario</option>
						<option value="Gobierno">Gobierno</option>
						<option value="Salud">Salud</option>
						<option value="Comercio">Comercio</option>
						<option value="Transporte">Transporte</option>
						<option value="Educación">Educación</option>
						<option value="Turismo">Turismo</option>
						<option value="Contrucción">Contrucción</option>
						<option value="Humanidades">Humanidades</option>
					</select>
				</div>				
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="RFC" name="rfc"/><span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Domicilio" name="address"/><span class="glyphicon glyphicon-home form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Teléfono" name="phone"/><span class="glyphicon glyphicon-phone form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Director de la empresa" name="director"/><span class="fa fa-certificate form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Nombre del contacto" name="contact"/><span class="fa fa-user form-control-feedback"></span>
				</div>
				<!--<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Periodo de registro" name="period"/><span class="fa fa-building form-control-feedback"></span>
				</div>-->
				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/><span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/><span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-1"><label><div class="checkbox_register icheck"><label><input type="checkbox" name="terms"></label></div></label>
				</div>
				<div class="col-xs-6">
					<div class="form-group">
						<button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Terminos</button>
					</div>
				</div>
				<div class="col-xs-4 col-xs-push-1">
					<button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
				</div>
			</div>
		</form>

		<a href="{{ url('/login') }}" class="text-center">{{ trans('adminlte_lang::message.membreship') }}</a>
	</div><!-- /.form-box -->
</div><!-- /.register-box -->

@include('layouts.partials.scripts_auth')

@include('auth.terms')

<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
	});
</script>

</body>

@endsection

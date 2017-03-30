@extends('layouts.auth')

@section('htmlheader_title')
    Register
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
            <p class="login-box-msg">Elije una de nuestras opciones</p>
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <!-- Extras -->
                <div class="type form-group has-feedback">
                    <input type="button" id="graduate" value="Egresado" class="btn btn-primary btn-block">
        
                    <input type="button" id="company" value="Empresa" class="btn btn-success btn-block ">
                </div>
                <div id="items"></div>
                <!-- End Extras -->
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
    <script>
        $(document).ready(function(){
            $("#graduate").click(function (e){
                $(this).parents(".type").remove();
                $('#items').append('<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/><span class="glyphicon glyphicon-user form-control-feedback"></span></div>'+'<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}"/><span class="glyphicon glyphicon-plus form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="CURP" name="curp"/><span class="glyphicon glyphicon-qrcode form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><select class="form-control" name="sex" id=""><option value="Hombre">Hombre</option><option value="Mujer">Mujer</option></select></div>'+
                '<div class="form-group has-feedback"><input type="date" class="form-control" placeholder="Fecha de Nacimiento" name="birthdate"/><span class="glyphicon glyphicon-calendar form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="Domicilio" name="address"/><span class="glyphicon glyphicon-home form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="Teléfono" name="phone"/><span class="glyphicon glyphicon-phone form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/><span class="glyphicon glyphicon-envelope form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/><span class="glyphicon glyphicon-lock form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/><span class="glyphicon glyphicon-log-in form-control-feedback"></span></div>'+
                '<div class="row"><div class="col-xs-1"><label><div class="checkbox_register icheck"><label><input type="checkbox" name="terms"></label></div></label></div>'+
                    '<div class="col-xs-6"><div class="form-group"><button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Terminos</button></div></div>'+
                    '<div class="col-xs-4 col-xs-push-1"><button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button></div></div>');
            });

            $("#company").click(function (e){
                $(this).parents(".type").remove();
                $('#items').append('<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/><span class="glyphicon glyphicon-user form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/><span class="glyphicon glyphicon-envelope form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/><span class="glyphicon glyphicon-lock form-control-feedback"></span></div>'+
                '<div class="form-group has-feedback"><input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/><span class="glyphicon glyphicon-log-in form-control-feedback"></span></div>'+
                '<div class="row"><div class="col-xs-1"><label><div class="checkbox_register icheck"><label><input type="checkbox" name="terms"></label></div></label></div>'+
                    '<div class="col-xs-6"><div class="form-group"><button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Terminos</button></div></div>'+
                    '<div class="col-xs-4 col-xs-push-1"><button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button></div></div>');
            });
        });
    </script>
</body>

@endsection

<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Last Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('last_name', 'Apellidos:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Curp Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('curp', 'CURP:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>

<!--- Sex Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sex', 'Sexo:') !!}
    {!! Form::text('sex', null, ['class' => 'form-control']) !!}
</div>

@if (Auth::user()->hasRole('graduate'))
    <!--- Birthday Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('birthday', 'Fecha de Nacimiento:') !!}
    <input type="date" value="{{ $graduate->birthday }}" name="birthday" class="form-control datepicker">
</div>
@else
<!--- Birthday Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('birthday', 'Fecha de Nacimiento:') !!}
    <input type="date" name="birthday" class="form-control">
</div>
@endif
<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
@if (Auth::user()->hasRole('graduate'))
<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
@else
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    <input name="phone" type="text" class="form-control bfh-phone" data-format="+52 (ddd) ddd-dddd">
</div>
@endif


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

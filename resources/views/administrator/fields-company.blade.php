<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre de la Empresa:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Sector Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sector', 'Sector:') !!} <br>
   {!! Form::select('sector', ['Agropecuario' => 'Agropecuario', 'Gobierno' => 'Gobierno', 'Salud' => 'Salud','Comercio' => 'Comercio','Transporte' => 'Transporte', 'Educación' => 'Educación', 'Turismo' => 'Turismo', 'Construcción' => 'Construccción', 'Humanidades' => 'Humaninades'],null ,['class' => 'form-control']) !!}
</div>

<!--- Rfc Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rfc', 'RFC:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfoo:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Director Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('director', 'Director:') !!}
    {!! Form::text('director', null, ['class' => 'form-control']) !!}
</div>

<!--- Contact Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contact', 'Contacto con ITTG:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!--- Period Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('period', 'Periodo:') !!}
    {!! Form::text('period', null, ['class' => 'form-control']) !!}
</div>
 
 <!--- Submit Field --->
<div class="form-group col-sm-6 col-lg-4">
     {!! Form::label('email', 'Correo electronico:') !!}
    <input type="email" name="email" class="form-control">
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

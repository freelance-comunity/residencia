<!--- Position Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('position', 'Posición Requerida:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!--- Task Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('task', 'Tareas a Realizar:') !!}
    {!! Form::text('task', null, ['class' => 'form-control']) !!}
</div>

<!--- Abilities Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('abilities', 'Habilidades:') !!}
    {!! Form::text('abilities', null, ['class' => 'form-control']) !!}
</div>

<!--- Area Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('area', 'Área de Trabajo:') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>

<!--- Salary Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('salary', 'Salario:') !!}
    {!! Form::text('salary', null, ['class' => 'form-control', 'maxlength' => 6]) !!}
</div>

<!--- Contact Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contact', 'Nombre del Contacto:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!--- phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono del Contacto:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 10]) !!}
</div>

<!--- email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Correo del Contacto:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<!--- Period Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('period', 'Periodo:') !!}
    {!! Form::select('period', $periods, null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

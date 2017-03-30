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
    {!! Form::text('salary', null, ['class' => 'form-control']) !!}
</div>

<!--- Contact Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contact', 'Contacto:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!--- Period Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('period', 'Periodo:') !!}
    {!! Form::text('period', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

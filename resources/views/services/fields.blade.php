<!--- Task Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('task', 'Tareas a Realizar:') !!}
    {!! Form::text('task', null, ['class' => 'form-control']) !!}
</div>

<!--- Area Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('area', 'Área:') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>

<!--- Contact Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contact', 'Correo Electrónico:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!--- Period Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('period', 'Periodo:') !!}
    {!! Form::text('period', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

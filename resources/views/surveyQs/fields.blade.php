<!--- Q Format Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('q_format', 'Formato:') !!}
    {!! Form::text('q_format', null, ['class' => 'form-control']) !!}
</div>

<!--- Q Text Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('q_text', 'Texto:') !!}
    {!! Form::text('q_text', null, ['class' => 'form-control']) !!}
</div>

<!--- Q Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('q_status', 'Estatus:') !!}
    {!! Form::text('q_status', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

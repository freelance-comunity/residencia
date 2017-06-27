<!--- Title Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!--- Body Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('body', 'Cuerpo:') !!}
    {!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>

<!--- File Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('file', 'Archivo:') !!}
    {!! Form::text('file', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>
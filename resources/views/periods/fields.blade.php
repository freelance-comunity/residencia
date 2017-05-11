<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Nombre (MES/MES_AÑO):') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Date Start Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date_start', 'Fecha de Inicio:') !!}
    <input type="date" name="date_start" value="" class="form-control">
</div>

<!--- Date End Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('date_end', 'Fecha de Termino:') !!}
    <input type="date" name="date_end" value="" class="form-control">
</div>

<!--- Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('status', 'Estatus:') !!}
    {!! Form::select('status',['1' => 'ACTIVO', '2' => 'INACTIVO'] ,null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

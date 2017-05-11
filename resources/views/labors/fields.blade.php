<!--- Company Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('company_name', 'Nombre de la Empresa:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!--- Company Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('company_phone', 'Teléfono de la Empresa:') !!}
    {!! Form::text('company_phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Position Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('position', 'Puesto Ocupado:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!--- Work Area Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('work_area', 'Area de Trabajo:') !!}
    {!! Form::text('work_area', null, ['class' => 'form-control']) !!}
</div>

<!--- Salary Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('salary', 'Salario:') !!}
    {!! Form::text('salary', null, ['class' => 'form-control']) !!}
</div>

<!--- Sector Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sector', 'Sector:') !!}
    {!! Form::select('sector', ['Primario' => 'Primario', 'Secundario' => 'Secundario', 'Terciario' => 'Terciario', 'Educativo' => 'Educativo'], null, ['class' => 'form-control'])!!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

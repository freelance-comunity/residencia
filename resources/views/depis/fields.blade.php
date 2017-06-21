<!--- Name Project Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_project', 'Nombre del Proyecto:') !!}
    {!! Form::text('name_project', null, ['class' => 'form-control']) !!}
</div>

<!--- Line Investigation Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('line_investigation', 'Linea de Investigación:') !!}
    {!! Form::text('line_investigation', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Residence Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_residence', 'Nombre de la Residencia:') !!}
    {!! Form::text('name_residence', null, ['class' => 'form-control']) !!}
</div>

<!--- Names Residents Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('names_residents', 'Nombre de Residentes:') !!}
    {!! Form::text('names_residents', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Tesis Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_tesis', 'Nombre de Tesis:') !!}
    {!! Form::text('name_tesis', null, ['class' => 'form-control']) !!}
</div>

<!--- Names Tesis Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('names_tesis', 'Nombre de Tesistas:') !!}
    {!! Form::text('names_tesis', null, ['class' => 'form-control']) !!}
</div>

<!--- Publications Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('publications', 'Publicaciones:') !!}
    {!! Form::text('publications', null, ['class' => 'form-control']) !!}
</div>

<!--- Publications Number Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('publications_number', 'Número de Publicaciones:') !!}
    {!! Form::text('publications_number', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Magazine Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_magazine', 'Nombre de Revistas:') !!}
    {!! Form::text('name_magazine', null, ['class' => 'form-control']) !!}
</div>

<!--- Type Publication Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('type_publication', 'Tipo de Publicación:') !!}
    {!! Form::text('type_publication', null, ['class' => 'form-control']) !!}
</div>

<!--- Name Article Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_article', 'Nombre del Articulo:') !!}
    {!! Form::text('name_article', null, ['class' => 'form-control']) !!}
</div>

<!--- Prototype Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('prototype', 'Descripcción del Prototipo:') !!}
    {!! Form::text('prototype', null, ['class' => 'form-control']) !!}
</div>

<!--- Patents Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('patents', 'Patente:') !!}
    {!! Form::text('patents', null, ['class' => 'form-control']) !!}
</div>

<!--- Validity Of Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('validity_of', 'Vigencia del:') !!}
    {!! Form::text('validity_of', null, ['class' => 'form-control']) !!}
</div>

<!--- Valid At Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valid_at', 'Al:') !!}
    {!! Form::text('valid_at', null, ['class' => 'form-control']) !!}
</div>

<!--- Others Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('others', 'Otros Logros:') !!}
    {!! Form::text('others', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

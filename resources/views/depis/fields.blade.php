<!--- Name Project Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_project', 'Nombre del Proyecto:') !!}
    {!! Form::text('name_project', null, ['class' => 'form-control']) !!}
</div>

<!--- Line Investigation Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('line_investigation', 'Linea de Investigación:') !!}
   {!! Form::select('line_investigation',['Arquitectura de Computo' => 'Arquitectura de Computo', 'Computación Educativa' =>'Computación Educativa', 'Inteligencia Artificial' =>'Inteligencia Artificial','Tecnologías de la Información y Base de Datos'=>'Tecnologías de la Información y Base de Datos'], null, ['class' => 'form-control'])!!}
</div>
    
<!--- Name Residence Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_residence', 'Nombre de la Residencia:') !!}
    {!! Form::text('name_residence', null, ['class' => 'form-control']) !!}
</div>
<script>
var counter = 1;
var limit = 5;
function addInput(divName){
     if (counter == limit)  {
          alert("Solo tienes permitido  " + counter + " alumnos");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Nombre del Residente "  + " <br><input type='text' name='names_residents[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}</script>


     <div class="form-group col-sm-6 col-lg-4" id="dynamicInput">
          {!! Form::label('names_residents[]', 'Nombre del Residente:') !!}
          <br>
          <input type="text" name="names_residents[]" class="form-control">
          <input type="button" class="btn btn-primary" value="agregar otro estudiante" onClick="addInput('dynamicInput');">
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

<script type="text/javascript">
function mostrar(id) {
    if (id == "si") {
        $("#si").show();
        
    }
}
</script>

<!--- Prototype Field --->
<div class="form-group col-sm-6 col-lg-4" >
    {!! Form::label('Prototipos de Software:') !!}
   <select class="form-control" id="status" name="status" onChange="mostrar(this.value);">
   <option selected="selected">Selecciona una opcion</option>
        <option value="si">Si</option>
        <option value="No">No</option>
       
     </select>
</div>

<!--- Prototype Field --->
<div class="form-group col-sm-6 col-lg-4" id="si"  style="display: none;">
    {!! Form::label('prototype', 'Descripcción del Prototipo:') !!}
    {!! Form::text('prototype', null, ['class' => 'form-control']) !!}
</div>

<!--- Patents Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('patents', 'Patente:') !!}
    {!! Form::select('patents',['Si'=>'Si','No'=>'No'], null, ['class' => 'form-control']) !!}
</div>

<!--- Validity Of Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('validity_of', 'Vigencia del:') !!}
   <input type="date"  value="{{ old('validity_of') }}" name="validity_of" class="form-control">
</div>

<!--- Valid At Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('valid_at', 'Al:') !!}
    <input type="date"  value="{{ old('valid_at') }}" name="valid_at" class="form-control">
</div>

<!--- Others Field --->
<div class="form-group col-sm-6 col-lg-10">
    {!! Form::label('others', 'Otros Logros:') !!}
    {!! Form::textarea('others', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

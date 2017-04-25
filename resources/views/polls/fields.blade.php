<!--- Question 4 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_4', 'Página de Facebook o Twitter:') !!}
    {!! Form::text('question_4', null, ['class' => 'form-control']) !!}
</div>

<!--- Question 5 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_5', 'Fecha de Egreso:') !!}
    {!! Form::text('question_5', null, ['class' => 'form-control']) !!}
</div>

<!--- Question 6 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_6', '¿Titulado?:') !!}
    <select class="form-control" name="question_6" id="">
        <option value="SI">SI</option>
        <option value="NO">NO</option>
        <option value="EN PROCESO">EN PROCESO</option>
    </select>
</div>

<!--- Question 7 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_7', '¿Cuánto tiempo tardo en encontrar su primer empleo después de egresar?') !!}
    <select class="form-control" name="question_7" id="">
        <option value="Menos de 1 año">Menos de 1 año</option>
        <option value="1 a 3 años">1 a 3 años</option>
        <option value="3 a 5 años">3 a 5 años</option>
    </select>
</div>

<!--- Question 8 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_8', '¿Por qué medio obtuvo su trabajo actual?') !!}
    <select class="form-control" name="question_8" id="">
        <option value="Bolsa de trabajo">Bolsa de trabajo</option>
        <option value="A través de la Residencia Profesional">A través de la Residencia Profesional</option>
        <option value="Medios de Comunicación">Medios de Comunicación</option>
    </select>
</div>

<!--- Question 9 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_9', 'Nombre de la empresa, institución u prganización en que labora actualmente:') !!}
    {!! Form::text('question_9', null, ['class' => 'form-control']) !!}
</div>

<!--- Question 10 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_10', 'Tipo de institución en la que labora:') !!}
    <select class="form-control" name="question_10" id="">
        <option value="Publica">Publica</option>
        <option value="Privada">Privada</option>
        <option value="Propia">Propia</option>
    </select>
</div>

<!--- Question 11 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_11', 'Menciona el sector económico al que pertenece la empresa u organización en la que labora:') !!}
    <select class="form-control" name="question_11" id="">
        <option value="Primario">Primario</option>
        <option value="Secundario">Secundario</option>
        <option value="Terciario">Terciario</option>
        <option value="Educativo">Educativo</option>
    </select>
</div>

<!--- Question 12 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_12', '¿Qué tan relacionado con sus estudios de licenciatura está el trabajo que actualmente desempeña?') !!}
    <select class="form-control" name="question_12" id="">
        <option value="Muy relacionado">Muy relacionado</option>
        <option value="Poco relacionado">Poco relacionado</option>
        <option value="Parcialmente">Parcialmente</option>
    </select>
</div>

<!--- Question 13 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_13', 'La formación obtenida en el instituto le permitió responder a las demandas de:') !!}
    <select class="form-control" name="question_13" id="">
        <option value="Trabajo">Trabajo</option>
        <option value="Vinculación">Vinculación</option>
        <option value="Toma de desiciones">Toma de desiciones</option>
        <option value="Operacionales">Operacionales</option>
        <option value="Investigación">Investigación</option>
        <option value="Otro(s)">Otro(s)</option>
    </select>
</div>

<!--- Question 14 Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('question_14', 'En qué área te desempeñas actualmente:') !!}
    <select class="form-control" name="question_14" id="">
        <option value="Desarrollo de software">Desarrollo de software</option>
        <option value="Base de datos">Base de datos</option>
        <option value="Redes">Redes</option>
        <option value="Aplicaciones móviles">Aplicaciones móviles</option>
        <option value="Arquitectura de computadoras">Arquitectura de computadoras</option>
        <option value="Negocios">Negocios</option>
        <option value="Otro(s)">Otro(s)</option>
    </select>
</div>

<!--- Comment Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('comment', 'Comentarios y sugerencias:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

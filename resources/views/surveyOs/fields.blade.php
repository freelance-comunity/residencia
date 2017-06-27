@php
    $question = App\Models\Survey_q::find($question->id);
    $survey = $question->survey;
@endphp
<!--- O Text Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('o_text', 'Texto:') !!}
    {!! Form::text('o_text', null, ['class' => 'form-control']) !!}
</div>

<!--- O Value Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('o_value', 'Value:') !!}
    {!! Form::text('o_value', null, ['class' => 'form-control']) !!}
</div>

<!--- Survey Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('survey_id', 'ID Encuesta:') !!}
    {!! Form::text('survey_id',$survey->id, ['class' => 'form-control', 'readonly']) !!}
</div>

<!--- Q Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('q_id', 'ID Pregunta:') !!}
    {!! Form::text('q_id', $question->id, ['class' => 'form-control', 'readonly']) !!}
</div>

<!--- O Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('o_status', 'Estatus:') !!}
    {!! Form::select('o_status', ['ACTIVA' => 'ACTIVA', 'INACTIVA' => 'INACTIVA'], NULL, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

<!--- Q Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('q_id', 'Q Id:') !!}
    {!! Form::text('q_id', null, ['class' => 'form-control']) !!}
</div>

<!--- O Value Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('o_value', 'O Value:') !!}
    {!! Form::text('o_value', null, ['class' => 'form-control']) !!}
</div>

<!--- Survey Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('survey_id', 'Survey Id:') !!}
    {!! Form::text('survey_id', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

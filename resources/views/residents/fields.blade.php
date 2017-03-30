<!--- Name Project Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_project', 'Nombre del Proyecto:') !!}
    {!! Form::text('name_project', null, ['class' => 'form-control']) !!}
</div>

<!--- Objective Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('objective', 'Objectivo:') !!}
    {!! Form::text('objective', null, ['class' => 'form-control']) !!}
</div>

<!--- Students Field --->
    <div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('students', 'Alumnos a Solicitar:') !!} <br>
    {!! Form::select('students', ['1' => '1', '2' => '2', '3' => '3','4' => '4','5' => '5'] ) !!}
</div><br>

<!--- Applicant Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('applicant', 'Solicitante:') !!}
    {!! Form::text('applicant', null, ['class' => 'form-control']) !!}
</div>

<!--- Address Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Period Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('period', 'Periodo:') !!}
    {!! Form::text('period', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>

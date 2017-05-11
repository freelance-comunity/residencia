<!--- Name Project Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name_project', 'Nombre del Proyecto:') !!}
    {!! Form::text('name_project', null, ['class' => 'form-control']) !!}
</div>

<!--- Area Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('area', 'Área de trabajo:') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>

<!--- Objective Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('objective', 'Objectivo:') !!}
    {!! Form::text('objective', null, ['class' => 'form-control']) !!}
</div>

<!--- Students Field --->
    <div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('students', 'Alumnos a Solicitar:') !!} 
    {!! Form::select('students', ['1' => '1', '2' => '2', '3' => '3','4' => '4','5' => '5'],null,['class'=>'form-control'] ) !!}
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

<!--- Contac Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contact', 'Nombre del Contacto:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>
<!--- phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<!--- cel Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cel', 'Celular:') !!}
    {!! Form::text('cel', null, ['class' => 'form-control']) !!}
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
<!--- Status Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('status', 'Estatus:') !!}
    {!! Form::select('status', ['Disponible' =>'Disponible', 'Ocupado' => 'Ocupado'],null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'appercase btn btn-primary']) !!}
</div>

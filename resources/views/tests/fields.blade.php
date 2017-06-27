@php
$test_count = App\Models\Test::all()->count();
$last_test  = App\Models\Test::all()->last();
$number     = $last_test->number + 1;
@endphp
<!--- Number Field --->
<div class="form-group col-sm-2 col-lg-2">
    {!! Form::label('number', 'Número:') !!}
    @if ($test_count == 0)
    	<input type="text" value="{{ 4 }}" name="number" class="form-control" readonly>
    @else
    	<input type="text" value="{{ $number }}" name="number" class="form-control" readonly>
    @endif
</div>

<!--- Title Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::textarea('title', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('guardar', ['class' => 'uppercase btn btn-primary']) !!}
</div>

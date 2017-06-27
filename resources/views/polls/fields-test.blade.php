@php
$tests = App\Models\Test::all();
@endphp

@foreach ($tests as $element)
<!--- Question {{ $element->number }} Field --->
<div class="form-group col-sm-6 col-lg-4">
	<label for="question">{{ $element->title }}</label>
	<input type="text" name="question_{{ $element->number }}" class="form-control">
</div>
@endforeach
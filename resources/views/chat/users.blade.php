@extends('layouts.app')
@section('title')
Inicio
@endsection
@section('htmlheader_title')
Home
@endsection


@section('main-content')
<div class="container spark-screen">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Chat</div>

				<div class="panel-body">
					@foreach($users as $user)
					<table class="table">
						<tr>
							<td>
								<img src="{{$user->avatar}}">
								{{$user->name}}
							</td>
							<td>
								<a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success pull-right">Enviar mensaje</a>
							</td>
						</tr>
					</table>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

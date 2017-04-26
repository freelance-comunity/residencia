<div class="col-md-6">
	<!-- DIRECT CHAT -->
	<div class="box box-warning direct-chat direct-chat-warning">
		<div class="box-header with-border">
			<h3 class="box-title">Chats conmigo</h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contactos" data-widget="chat-pane-toggle">
					<i class="fa fa-comments"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			@php
			Talk::setAuthUserId(Auth::user()->id);
			$threads = Talk::threads();
			@endphp
			<div class="box-body">
				<!-- Conversations are loaded here -->
				<div class="direct-chat-messages">
					<!-- Message. Default to the left -->
					@foreach ($threads as $inbox)
					@if(!is_null($inbox->thread))
					<div class="direct-chat-msg">
						<a href="{{route('message.read', ['id'=>$inbox->withUser->id])}}">
							<div class="direct-chat-info clearfix">
								<span class="direct-chat-name pull-left">{{$inbox->withUser->name}}</span>
								<span class="direct-chat-timestamp pull-right">{{$inbox->thread->humans_time}}</span>
							</div>
							<!-- /.direct-chat-info -->
							<img class="direct-chat-img" src="{{$inbox->withUser->avatar}}" alt="message user image"><!-- /.direct-chat-img -->
							<div class="direct-chat-text">
								<div class="status">
									@if(auth()->user()->id == $inbox->thread->sender->id)
									<span class="fa fa-reply"></span>
									@endif
									<span>{{substr($inbox->thread->message, 0, 30)}}...</span>
								</div>
							</div>
							<!-- /.direct-chat-text -->
						</div>
					</a>
					@endif
					@endforeach
					<!-- /.direct-chat-msg -->
				</div>
				<!--/.direct-chat-messages-->
				@php
				$role = Auth::user()->role;
				$graduate = App\Role::where('name', 'graduate')->first();
				$graduates = $graduate->users; 
				@endphp
				<!-- Contacts are loaded here -->
				<div class="direct-chat-contacts">
					<ul class="contacts-list">

						@foreach ($graduates as $graduate)
						<li>
							<a href="#">
								<img class="contacts-list-img" src="{{$graduate->avatar}}" alt="graduate Image">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										{{$graduate->name}} {{$graduate->last_name}}
										<small class="contacts-list-date pull-right">2/28/2015</small>
									</span>
									<a href="{{route('message.read', ['id'=>$graduate->id])}}" class="btn btn-success pull-right">Enviar mensaje</a>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						@endforeach
						<!-- End Contact Item -->
					</ul>
					<!-- /.contatcts-list -->
				</div>
				<!-- /.direct-chat-pane -->
			</div>
			<!-- /.box-body -->
		</div>
		<!--/.direct-chat -->
	</div>
	<!-- /.col -->

	<div class="col-md-6">
		<!-- USERS LIST -->
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Ultimos Egresados Registrados</h3>

				<div class="box-tools pull-right">
					<span class="label label-danger">4 Nuevos miembros</span>
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			@php
			$graduates = App\Models\Graduate::all();
			@endphp
			<div class="box-body no-padding">
				<ul class="users-list clearfix">
					@foreach ($graduates as $graduate)
					<li>
						<img src="{{$graduate->user->avatar}}" alt="User Image">
						<a class="users-list-name" href="#">{{$graduate->name}} {{$graduate->last_name}}</a>
						<span class="users-list-date">{{$graduate->created_at}}</span>
					</li>
					@endforeach
				</ul>
				<!-- /.users-list -->
			</div>
			<!-- /.box-body -->
			<div class="box-footer text-center">
				<a href="{{ url('allgraduates') }}" class="uppercase">Ver todos los egresados</a>
			</div>
			<!-- /.box-footer -->
		</div>
		<!--/.box -->
	</div>
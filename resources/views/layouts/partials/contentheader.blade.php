<!-- Content Header (Page header) -->
<section class="content-header">
	<h1 style="font-size: 2.625rem; line-height: 1.2;">
		<span class="ion-speedometer"></span> Panel de Control
	</h1>
	<p>
		@yield('contentheader_title', 'Page Header here')
		<small>@yield('contentheader_description')</small>
	</p>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
		<li class="active">{{ trans('adminlte_lang::message.here') }}</li>
	</ol>
</section>
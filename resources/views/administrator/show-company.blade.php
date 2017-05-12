@extends('layouts.app')
@section('contentheader_title')
Mis datos
@endsection
@section('main-content')
<div class="container">
    
    
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">
                @include('sweet::alert')
                <!-- Profile Image -->
                <div class="box box-primary">
               
                    <div class="box-body box-profile">
                      
                        <h3 class="profile-username text-center">{{ $company->name }} </h3>
                        <ul class="list-group list-group-unbordered">
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Datos Generales</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-qrcode margin-r-5"></i> RFC</strong>
                            <p class="text-muted">
                                {{$company->rfc}}
                            </p>
                            <hr>
                            <strong><i class="fa fa-mobile margin-r-5"></i> Teléfono celular</strong>
                            <p class="text-muted">{{$company->phone}}</p>
                            <hr>
                            <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
                            <p class="text-muted">{{$company->address}}</p>
                            <hr>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#timeline" data-toggle="tab">Datos</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- /.tab-pane -->
                            <div class="active tab-pane" id="timeline">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <ul class="timeline">
                                        <!-- timeline item -->
                                        <li>
                                            <!-- timeline icon -->
                                            <i class="fa fa-user bg-blue"></i>
                                            <div class="timeline-item">
                                                <span class="time"> Creado el: {{$company->created_at}}</span>

                                                <h3 class="timeline-header"><a>Datos Generales</a></h3>

                                                <div class="timeline-body">  
                                                    <strong>Sector: </strong>{{ $company->sector}} <br>               
                                                    <strong>RFC: </strong>{{ $company->rfc}} <br>
                                                    <strong>Dirección: </strong>{{ $company->address}} <br>
                                                    <strong>Teléfono celular:</strong> {{ $company->phone}} <br>
                                                    <strong>Director:</strong> {{ $company->director}} <br> 
                                                    <strong>Contacto directo: </strong>{{ $company->contact}} <br>   
                                                    <strong>Sexo:</strong> {{$company->period}} <br>  
                                                </div>
                                            </div>
                                        </li>
                                        <!-- timeline item -->
                                     
                                    </ul>
                                </ul>
                              
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        @endsection

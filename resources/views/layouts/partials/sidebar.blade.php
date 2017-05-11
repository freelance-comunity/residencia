<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
            </div>
        </div>
        @endif


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            @role('coordinador')
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Usuarios Existentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('allgraduates') }}">Egresados</a></li>
                    <li><a href="{{ url('allcompanies') }}">Empresas</a></li>
                    <li><a href="#">Docentes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Solicitudes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('allvacancies')}}">Solicitud de Vacantes</a></li>
                    <li><a href="{{ url('allresidents')}}">Solicitud de Residentes</a></li>
                    <li><a href="{{ url('allservices') }}">Solicitud de Servicio Social</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-archive'></i> <span>Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Todos los Proyectos</a></li>
                    <li><a href="#">Arquitectura de Computo</a></li>
                    <li><a href="#">Computación Educatica</a></li>
                    <li><a href="#">Inteligencia Artificial</a></li>
                    <li><a href="#">Tecnologías de la Información <br> 
                        y Base de Datos</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-bar-chart-o'></i> <span>Estadísticas</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Egresados</a></li>
                        <li><a href="#">Empresas</a></li>
                        <li><a href="#">Proyectos Vinculados</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-bank'></i> <span>Banco de Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Registrar</a></li>
                        <li><a href="#">Empresas</a></li>
                    </ul>
                </li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-calendar '></i> <span>Eventos</span></a></li>
                <li><a href="{{ url('chatgraduates') }}"><i class='fa fa-comment'></i> <span>Chat</span></a></li>
                @endrole

                @role('company')                
                <li class="active"><a href="{{ url('companies') }}"><i class='fa fa-building-o '></i> <span>Mi Perfil</span></a></li>
                <li class="active"><a href="{{ url('vacancies') }}"><i class='fa fa-code '></i> <span>Solicitud de Vacantes</span></a></li>
                <li class="active"><a href="{{ url('residents') }}"><i class='fa fa-laptop '></i> <span>Solicitud de residentes</span></a></li>
                <li class="active"><a href="{{ url('services') }}"><i class='fa fa-book'></i> <span>Solicitud de Servicio Social</span></a></li> 
                @endrole 

                @role('graduate')
                <li class="treeview">
                    <a href="#"><i class='fa fa-database'></i> <span>Mis datos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('viewdata') }}/{{ Auth::user()->id }}">Datos personales</a></li>
                        <li><a href="{!! route('labors.create') !!}">Datos laborales</a></li>
                    </ul>
                </li>
                <li><a href="{!! route('polls.create') !!}"><i class='fa fa-line-chart'></i> <span>Encuesta de seguimiento</span></a></li>
                <li><a href="{{ url('adminchat') }}"><i class='fa fa-comment'></i> <span>Iniciar Chat</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-graduation-cap'></i> <span>Educación continua</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">Cursos</a></li>
                            <li><a href="#">Diplomados</a></li>
                            <li><a href="#">Talleres</a></li>
                            <li><a href="#">Conferencias</a></li>
                            <li><a href="#">Eventos</a></li>
                        </ul>
                    </li>
                     <li><a href="#"><i class='fa fa-briefcase'></i> <span>Bolsa de trabajo</span></a></li>
                    @endrole
            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>


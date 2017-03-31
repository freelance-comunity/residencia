<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
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
            <li><a href="#"><i class='fa fa-users'></i> <span>Crear Usuarios</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-user'></i> <span>Usuarios Existentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Egresados</a></li>
                    <li><a href="#">Empresas</a></li>
                    <li><a href="#">Docentes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Solicitudes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Solicitud de Vacantes</a></li>
                    <li><a href="#">Solicitud de Residentes</a></li>
                    <li><a href="#">Solicitud de Servicio Social</a></li>
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
                @endrole

                @role('graduate')
                <li class="treeview">
                    <a href="#"><i class='fa fa-database'></i> <span>Mis datos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Datos personales</a></li>
                        <li><a href="#">Datos laborales</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class='fa fa-line-chart'></i> <span>Encuesta de seguimiento</span></a></li>
                <li><a href="#"><i class='fa fa-comment'></i> <span>Solicitar cita</span></a></li>
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

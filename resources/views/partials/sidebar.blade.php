<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        {{ Session::put('UserID',Auth::user()->id) }}
        {{ Session::put('UserType',Auth::user()->type) }}
        @if(Auth::user()->type == 'Secretaria')
            {{ Session::put('UserPrograma',Auth::user()->secretaria->programa_id) }}
        @elseif(Auth::user()->type == 'Docente')
            {{ Session::put('UserPrograma',Auth::user()->profesor->programa_id) }}
        @elseif(Auth::user()->type == 'Admin')
            {{ Session::put('UserPrograma',null) }}
        @else

        @endif
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#">
                    <i class="fa fa-circle text-success"></i>
                    {{ Auth::user()->type }}</a><br>
                    @if(Auth::user()->type == 'Secretaria')
                        {{ Auth::user()->secretaria->programa->nombre }}
                    @elseif(Auth::user()->type == 'Docente')
                        {{ Auth::user()->profesor->programa->nombre }}
                    @elseif(Auth::user()->type == 'Estudiante')
                        {{ Auth::user()->estudiante->programa->nombre }}
                    @elseif(Auth::user()->type == 'Admin')
                        Admin
                    @elseif(Auth::user()->type == 'Director')
                        {{ Auth::user()->estudiante->director->nombre }}
                    @endif
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class=''>
                <a href="{{ url('home')}}"><i class='fa fa-home'></i> <span>Inicio</span></a>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-graduation-cap'></i> <span>Trabajo de Grado</span></a>
                <ul class="treeview-menu">
                    
                    <li class=''>
                        <a href="{{ url('modalidad-de-grado')}}"><i class='fa fa-user'></i> <span>Modalidades</span></a>
                    </li>            
                    <li class=''>
                        <a href="{{ url('estado-trabajo-de-grado')}}"><i class='fa fa-user'></i> <span>Estados</span></a>
                    </li>

                    @if ( Auth::user()->type != 'Estudiante' && Auth::user()->type != 'Docente')
                        <li class=''>
                            <a href="{{ url('gestionar/trabajo-de-grado/create')}}"><i class='fa fa-user'></i> <span>Nuevo Trabajo de Grado</span></a>
                        </li>
                    @endif

                    @if(Auth::user()->type != 'Estudiante')
                        <li class=''>
                            <a href="{{ url('gestionar/trabajo-de-grado')}}"><i class='fa  fa-group'></i> <span>Lista de Trabajos de Grados</span></a>
                        </li>
                    @endif

                    @if(Auth::user()->type == 'Estudiante')
                        <li class=''>
                            <a href="{{ url('gestionar/trabajo-de-grado')}}"><i class='fa  fa-group'></i> <span>Trabajo de Grado</span></a>
                        </li>
                    @endif
                </ul>
            </li>  

            @if (Auth::user()->type == 'Admin' && Auth::user()->type == 'Decano')
                
                @if (Auth::user()->type == '')
                    <li class=''>
                        <a href="{{ url('gestionar/estudiante/create')}}"><i class='fa fa-user-plus'></i> <span>Asignar Decano</span></a>
                    </li>
                @endif
                
                <li class="treeview">
                    <a href="#"><i class='fa fa-users'></i> <span> Secretaria</span></a>
                    <ul class="treeview-menu">
                        <li class=''>
                            <a href="{{ url('gestionar/secretaria')}}"><i class='fa  fa-group'></i> <span>Lista de Secretarias</span></a>
                        </li>
                        <li class=''>
                            <a href="{{ url('gestionar/secretaria/create')}}"><i class='fa fa-user'></i> <span>Agregar Secretaria</span></a>
                        </li>
                    </ul>
                </li>
            @endif
            @if ( Auth::user()->type != 'Estudiante')
                <li class="treeview">
                    <a href="#"><i class='fa fa-child'></i> <span>Estudiante</span></a>
                    <ul class="treeview-menu">
                        <li class=''>
                            <a href="{{ url('gestionar/estudiante')}}"><i class='fa  fa-group'></i> <span>Lista de Estudiantes</span></a>
                        </li>
                        @if(Auth::user()->type != 'Docente')
                            <li class=''>
                                <a href="{{ url('gestionar/estudiante/create')}}"><i class='fa fa-user-plus'></i> <span>Agregar Estudiante</span></a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-user'></i> <span>Docentes</span></a>
                    <ul class="treeview-menu">
                        <li class=''>
                            <a href="{{ url('gestionar/profesor')}}"><i class='fa fa-group'></i> <span>Lista de Docentes</span></a>
                        </li>
                        @if(Auth::user()->type != 'Docente')
                            <li class=''>
                                <a href="{{ url('gestionar/profesor/create')}}"><i class='fa fa-user-plus'></i> <span>Agregar Docente</span></a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

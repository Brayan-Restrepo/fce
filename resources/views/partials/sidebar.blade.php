<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class=''><a href="{{ url('home')}}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li class=''><a href="{{ url('gestionar/estudiante/create')}}"><i class='fa fa-user'></i> <span>Agregar Estudiante</span></a></li>
            <li class=''><a href="{{ url('')}}"><i class='fa fa-user'></i> <span>Estudiantes</span></a></li>
            <li class=''><a href="{{ url('')}}"><i class='fa fa-user'></i> <span>Docentes</span></a></li>
            <li class=''><a href="{{ url('')}}"><i class='fa fa-user'></i> <span>Agregar Docente</span></a></li>
        
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

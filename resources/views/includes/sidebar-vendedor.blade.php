<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Busqueda..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU DE NAVEGACION</li>
            
            </li>
          
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Operaciones</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="venta/create"><i class="fa fa-circle-o"></i>Realizar Venta</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-television"></i>Ingreso de Productos</a></li>
                    
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Reportess</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i>Reporte 1</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i>Reporte 2</a></li>
                    <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i>Reporte 3</a></li>
                </ul>
            </li>
           
            <li>
                <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendario</span>
                <small class="label pull-right bg-red">3</small>
                </a>
            </li>
            <li>
                <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Correo</span>
                <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
           
            <li class="header">Otros</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Importantes</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i>Peligros</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i>Informacion</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
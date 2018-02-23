<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="local/resources/views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo session()->get("nombre");?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
       
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">         
      <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Ventas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu " style="display: block;">
            <li><a href="#"><i class="fa fa-circle-o"></i>Ingresar ventas</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Ingresar Saldos</a></li> 
            <li><a href="#"><i class="fa fa-circle-o"></i>Cotización</a></li> 
            <li><a href="#"><i class="fa fa-circle-o"></i>Ver - Imprimir</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Buscar</a></li>  
            <li><a href="#"><i class="fa fa-circle-o"></i>Mis ventas</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Mis contabilizados</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Entrega de OT</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Promociones 2017</a></li>    
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-md"></i> <span>Hospital</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="#"><i class="fa fa-circle-o"></i>Inscripción</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Fabricación</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Entregado</a></li>    
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="local/resources/views/img/oh.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo session()->get("nombre");?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
       
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">   
         <li>
          <a href="dashboard">
            <i class="fa fa-home"></i> <span>Inicio</span> 
          </a>
        </li>       
        <li>
          <a href="usuarios">
            <i class="fa fa-user"></i> <span>Usuarios</span> 
          </a>
        </li> 

         <li>
          <a href="configuracion">
            <i class="fa fa-cog"></i> <span>Configuración</span> 
          </a>
        </li> 

         <li>
          <a href="kardex">
            <i class="fa fa-user-secret"></i> <span>Kardex</span> 
          </a>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
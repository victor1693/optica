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
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Buscar Opin</span> 
          </a>
        </li> 

         <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Opin Privados</span> 
          </a>
        </li> 

         <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>My Opin</span> 
          </a>
        </li> 

         <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Favoritos</span> 
          </a>
        </li> 

         <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Opin Votatos</span> 
          </a>
        </li> 

         <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Crear Opin</span> 
          </a>
        </li> 

         <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Settings</span> 
          </a>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Óptica Hebreo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php include('local/resources/views/includes/referencias_top.html');?>
  <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('local/resources/views/includes/header.php');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('local/resources/views/includes/aside.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
       Fabricación
      </h1> 
    </section> 
    <!-- Main content -->
    <section class="content"> 
 
 
   
<!--modal cheque-->
  
      <div class="row">
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">                
              <li><a href="#mproductos active" data-toggle="tab"><strong></strong></a></li>              
              <li class="pull-left header"><i class="fa fa-th"></i>Panel</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
              <div class="tab-pane row active" id="mproductos">  
                    <div class="col-sm-12 text-center" style="padding: 0px;margin-bottom: 15px;">
                      <div class="col-sm-12">
                        <h4 class="box-title">Lentes Fabricados de Hospital</h4>
                      </div> 
                    </div>  
                    <div class="col-sm-12 text-center" style="padding: 0px;margin-bottom: 15px;">  
                        <input style="max-width: 250px;margin: 0 auto;" class="form-control" type="text" id="buscador" placeholder="ID a buscar..."> 
                        <button  style="max-width: 150px;margin-top: 15px;" class="form-cotnrol btn btn-danger btn-sm">Ingresar lentes</button>
                    </div> 

                   <div class="col-sm-12">
                      <table class="table table-bordered table-condenced table-hover">
                      <thead>
                        <th>OT Hospital</th>
                        <th>Nombre</th>
                        <th>RUT</th>
                        <th>Teléfono</th> 
                      </thead>
                   </div>
                    </table> 
              </div> 
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>


<div class="control-sidebar-bg"></div>
</div>
<?php include('local/resources/views/includes/referencias_down.php');?>
<?php include('local/resources/views/includes_js/us_dash.php');?>
</body>
</html>

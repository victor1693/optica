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
       Ventas
      </h1> 
    </section>

    <!-- Main content -->
    <section class="content"> 

      <div class="row">
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right"> 
              <li><a href="#tab_3-2" data-toggle="tab"><strong>Paso 3 - </strong> Medio de pago</a></li>
              <li><a href="#tab_2-2" data-toggle="tab"><strong>Paso 2 - </strong>Producto</a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><strong>Paso 1 - </strong>Cliente</a></li> 
              <li class="pull-left header"><i class="fa fa-th"></i>Nueva venta</li>
            </ul>
            <div class="tab-content ">
              <div class="tab-pane active row" id="tab_1-1"> 
                   <div class="col-sm-6">

                     <div class="col-sm-6" style="padding: 0px;">
                        <label>Nombre</label>
                        <input class="form-control col-sm-" type="text" name="nombre">
                     </div>
                      
                     <div class="col-sm-6" style="padding: 0px;">
                       <label>RUT</label>
                        <input class="form-control" type="text" name="rut">
                     </div>

                      <div class="col-sm-6" style="padding: 0px;">
                        <label>Correo</label>
                        <input class="form-control col-sm-" type="text" name="nombre">
                     </div>
                      
                     <div class="col-sm-6" style="padding: 0px;">
                       <label>Dirección</label>
                        <input class="form-control" type="text" name="rut">
                     </div>

                     <div class="col-sm-6" style="padding: 0px;">
                        <label>Teléfono</label>
                        <input class="form-control col-sm-" type="text" name="nombre">
                     </div>
                      
                     <div class="col-sm-6" style="padding: 0px;">
                       <label>Celular</label>
                        <input class="form-control" type="text" name="rut">
                     </div>

                      <div class="col-sm-12" style="padding: 0px;padding-top: 10px;margin-bottom:10px;">
                        <button class="btn btn-primary form-control">Siguiente</button>
                     </div> 
                   </div>  

                   <div class="col-xsm-6 text-center">
                     <img src="local/resources/views/iconos/id-card.png" style="width: 220px;">
                   </div>
                  
              </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2-2">
                  The European languages are members of the same family. Their separate existence is a myth.
                  For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                  in their grammar, their pronunciation and their most common words. Everyone realizes why a
                  new common language would be desirable: one could refuse to pay expensive translators. To
                  achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                  words. If several languages coalesce, the grammar of the resulting language is more simple
                  and regular than that of the individual languages.
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3-2">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                  sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                  like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->

            <div class="col-sm-12" style="padding: 0px;margin-top: 20px;">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Resumen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Check</th>
                  <th>OT</th>
                  <th>Total Ventas</th>
                  <th>Efectivo</th>
                  <th>Tarjeta</th>
                  <th>Cheque</th>
                  <th>OC</th>
                  <th>Tipo</th>
                  <th>Imprimir</th>
                  <th>Editar</th>
                </tr>
                <tr> 
                  <td>1</td> 
                  <td><input type="checkbox" name=""></td> 
                  <td>1891</td> 
                  <td>0</td> 
                  <td>$15</td> 
                  <td>$4891</td> 
                  <td>$0</td> 
                  <td>$0</td> 
                  <td>Saldo</td> 
                  <td></td> 
                  <td></td> 
                </tr>
                 
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php //include('includes/footer.php');?>
 
  <div class="control-sidebar-bg"></div>
</div>
<?php include('local/resources/views/includes/referencias_down.php');?>
</body>
</html>

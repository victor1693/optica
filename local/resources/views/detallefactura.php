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
       Detalle de factura
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
              
              <li class="pull-left header"><i class="fa fa-th"></i>Factura</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
              <div class="tab-pane row active" > 
                   
                      <div class="col-sm-12 " >
                          <h4 class="box-title">Datos del cliente</h4>
                          <table class="table-bordered table-hover" style="">
                            <tr>
                              <td style="width: 100px;"><strong>RUT:</strong></td>
                              <td>12345678-9</td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>Nombre:</strong></td>
                              <td>Victor Fernandez</td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>Correo:</strong></td>
                              <td>victor.fernandez.18@hotmail.com</td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>Dirección:</strong></td>
                              <td>San fco</td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>Teléfono:</strong></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>Celular:</strong></td>
                              <td></td>
                            </tr>
                          </table>
                         <hr>
                           <h4 class="box-title">Datos del pedido</h4>
                          <div class="table-responsive">
                            <table class="table-bordered table-hover" style="width: 100%;">
                            <tr>
                              <td style="width: 120px;"><strong>Tipo de producto:</strong></td>
                              <td>12345678-9</td>
                              <td style="width: 100px;"><strong>Cristales:</strong></td>
                              <td>Victor Fernandez</td>
                            </tr>
                            
                            <tr>
                              <td style="width: 100px;"><strong>Armazon:</strong></td>
                              <td>victor.fernandez.18@hotmail.com</td>
                            
                              <td style="width: 100px;"><strong>Codigo:</strong></td>
                              <td>San fco</td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>CIL-Derecho:</strong></td>
                              <td></td>
                             
                              <td style="width: 100px;"><strong>CIL-Izquierdo:</strong></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>EJE-Derecho:</strong></td>
                              <td></td>
                            
                              <td style="width: 100px;"><strong>EJE-Izquierdo:</strong></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td style="width: 100px;"><strong>ESF-Derecho:</strong></td>
                              <td></td>
                            
                              <td style="width: 100px;"><strong>ESF-Izquierdo:</strong></td>
                              <td></td>
                            </tr>
                             <tr>
                              <td style="width: 100px;"><strong>H-Derecho:</strong></td>
                              <td></td>
                          
                              <td style="width: 100px;"><strong>H-Izquierdo:</strong></td>
                              <td></td>
                            </tr>

                            <tr>
                              <td style="width: 100px;"><strong>DC:</strong></td>
                              <td></td>
                           
                              <td style="width: 100px;"><strong>DP:</strong></td>
                              <td></td>
                            </tr>

                            <tr>
                              <td style="width: 100px;"><strong>Seguro:</strong></td>
                              <td></td>
                           
                              <td style="width: 100px;"><strong>Oftalmologo:</strong></td>
                              <td></td>
                            </tr> 
                            <tr>
                              <td style="width: 200px;"><strong>Fecha de entrega:</strong></td>
                              <td></td>
                            
                              <td style="width: 200px;"><strong>Sucursal de retiro:</strong></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td style="width: 200px;"><strong>Otro:</strong></td>
                              <td></td>
                            
                              <td style="width: 200px;"><strong>Total:</strong></td>
                              <td></td>
                            </tr>
                              <tr>
                              <td style="width: 100px;"><strong>Observación:</strong></td>
                              <td></td>
                            </tr>
                          </table>
                          </div>
                          <hr>
                          <h4 class="box-title">Información de pagos</h4>
                          <table class="table table-condensed">
                          <thead>
                            <th>#</th>
                            <th>Método</th>
                            <th>Monto</th>
                            <th>Fecha</th>
                            <th>Detalle</th>
                          </thead>
                            <tr>
                            <td>1</td>
                              <td>Tarjeta</td>
                              <td>2000</td>
                              <td>20-03-2008</td>
                              <td><button class="btn btn-xs btn-primary ">Detalles</button></td>
                              
                            </tr> 
                          </table>
                        </div> 

                  
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

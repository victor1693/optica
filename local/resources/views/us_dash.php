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
              <li><a href="#mpagos" data-toggle="tab"><strong>Paso 3 - </strong> Medio de pago</a></li>
              <li><a href="#tab_2-2" data-toggle="tab"><strong>Paso 2 - </strong>Producto</a></li>
              <li class="active"><a href="#tab_1-1" data-toggle="tab"><strong>Paso 1 - </strong>Cliente</a></li> 
              <li class="pull-left header"><i class="fa fa-th"></i>Nueva venta</li>
            </ul>
            <div class="tab-content ">
            <!--Tab nueva venta-->
              <div class="tab-pane row" id="tab_1-1"> 
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
              <!--Tab medios de pago-->
              <div class="tab-pane active row" id="mpagos"> 
                   <div class="col-sm-6">  

                      <table class="table table-condensed table-bordered table-hover">
                      <tbody>
                      <tr> 
                        <th style="width: 100px;">Detalle</th>
                        <th>Monto</th>  
                      </tr>                       
                    </tbody>
                </table>

                   <!--
                   <table class="table table-condensed table-bordered table-hover">
                      <tbody><tr> 
                        <th style="width: 100px;">Detalle</th>
                        <th>Monto</th>  
                      </tr>
                      <tr> 
                        <td>Efectivo</td> 
                        <td> <input type="" name="" style="height: 20px;width: 60px;"></td> 
                      </tr> 

                       <tr> 
                        <td>Tarjeta <a href="#"><strong>(+)</strong></a> </td> 
                        <td> <input readonly="" type="" name="" style="height: 20px;border: 0px;width: 60px;"></td>
                      </tr> 
                      
                      <tr> 
                        <td>Cheque <a href="#"><strong>(+)</strong></a> <strong></strong></td> 
                        <td> <input readonly="" type="" name="" style="height: 20px;border: 0px;width: 60px;"></td>
                      </tr> 

                      <tr> 
                        <td>OC</td> 
                        <td> <input type="" name="" style="height: 20px;width: 60px;"></td>
                      </tr> 

                      <tr> 
                        <td>Transferencia</td> 
                        <td> <input readonly="" type="" name="" style="height: 20px;border: 0px;width: 60px;"></td>
                      </tr> 
                       <tr> 
                        <td><strong>Total</strong></td> 
                        <td> <input readonly="" type="" name="" style="height: 20px;border: 0px;width: 60px;"></td>
                      </tr> 
                    </tbody>
                </table>-->
                      <div class="col-sm-12" style="padding: 0px;padding-top: 10px;margin-bottom:10px;">
                        <button class="btn btn-primary form-control">Siguiente</button>
                     </div> 
                   </div>  

                   <div class="col-xsm-6 text-center">
                     <img src="local/resources/views/iconos/payments.jpg" style="width: 220px;">
                   </div> 
              </div>
                
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

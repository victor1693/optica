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
       Saldos
      </h1> 
    </section> 
    <!-- Main content -->
    <section class="content"> 
 

<!--MOdal detalles-->
 <div class="modal fade" id="modal_opciones">
   <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title pull-left"><strong>Opciones avanzadas</strong></h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        <table class="table table-hover table-condensed">
          <thead>
            <th>#</th> 
            <th>Medio de pago</th> 
            <th>Monto</th>  
            <th>Eliminar</th>
          </thead>
          <tbody id="tabla_medios_pago">
          
          </tbody>
        </table>        
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-primary">Agregar</button>-->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div> 

  <div class="modal fade" id="modal_tarjeta">
   <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title pull-left"><strong>Tarjeta</strong></h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        <div class="col-sm-6">
          <div class="form-group has-feedback">
            <input   id="m_total" name="correo" type="text" class="form-control money con_modal" placeholder="Total">
            <span class="glyphicon glyphicon-usd form-control-feedback"></span>
          </div>

          <div class="form-group col-xs-6" style="padding: 0px;">
             <select id="m_tarjeta" class="form-control con_modal">
               <option value="">Tarjeta</option>
               <option value="RedCompra">RedCompra</option>
               <option value="MasterCard">MasterCard</option>
               <option value="Visa">Visa</option>
               <option value="AbcDin">AbcDin</option>
             </select>
          </div>

           <div class="form-group col-xs-6"  style="padding: 0px;">
             <select id="m_cuotas" class="form-control con_modal">
               <option value="">Cuotas</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
             </select>
          </div>

          <div class="col-xs-12" style="padding: 0px;">
            <div class="form-group has-feedback">
            <input id="m_operacion"  name="correo" type="text" class="form-control numeric con_modal" placeholder="Nº Operación">
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <img src="local/resources/views/img/tarjeta.png" style="width: 200px;">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onClick="validar_tarjeta()">Agregar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div> 

<!--modal cheque-->
 <div class="modal fade" id="modal_cheque">
  <div class="modal-dialog " role="document" >
    <div class="modal-content " >
      <div class="modal-header">
        <h5 class="modal-title pull-left"><strong>Cheques</strong></h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        <div class="col-sm-7">
          <div class="form-group col-xs-6" style="padding: 0px;">
          <label>Banco</label><br>
             <select id="c_banco" class="select2 form-control  con_cheque" style="width: 100%;">
               <option value="">Banco</option> 
               <option value="ES">Estado</option>
                <option value="CH">Chile</option>
                <option value="SA">Santander</option>
                <option value="BC">BCI</option>
                <option value="FA">Falabella</option>
                <option value="BI">Bice</option>
                <option value="SE">Security</option>
                <option value="OT">Otro</option> 
             </select>
          </div> 
           <div class="form-group col-xs-6"  style="padding: 0px;">
           <label>Nº de cuenta</label><br>
            <input id="c_cuenta" class="form-control numeric con_cheque" placeholder="Nº de cuenta" type="" name="">
          </div> 
            <div class="form-group col-xs-6"  style="padding: 0px;">
            <label>Nº de cheque</label><br>
              <input id="c_cheque" class="form-control  numeric con_cheque" placeholder="Nº de cheque" type="" name="">
            </div>
           
            <div class="form-group col-xs-6"  style="padding: 0px;">
              <label>Fecha de cobro</label><br>
              <input id="c_fecha" class="form-control datapicker con_cheque" placeholder="Fecha de cobro" name="">
            </div>

            <div class="form-group col-xs-6"  style="padding: 0px;">
               <label>Código</label><br>
              <input id="c_codigo" class="form-control numeric con_cheque" placeholder="Código" type="" name="">
            </div>
           
            <div class="form-group col-xs-6"  style="padding: 0px;">
             <label>Teléfono</label><br>
              <input id="c_telefono" class="form-control numeric con_cheque" placeholder="Teléfono" type="" name="">
            </div>

             <div class="form-group col-xs-6"  style="padding: 0px;">
              <label>RUT</label><br>
              <input id="c_rut" class="form-control  numeric con_cheque" placeholder="RUT" type="" name="">
            </div>
            <div class="form-group col-xs-6 "  style="padding: 0px;">
             <label>Total</label><br>
              <input id="c_total" class="form-control money con_cheque" placeholder="Total" type="" name="">
            </div> 
        </div>
         <div class="col-sm-5 text-center" style="padding-top: 40px;">
        <img class="img-responsive"  src="http://www.scorezero.com/wp-content/uploads/2009/12/cheque-sync.png" >
      </div>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onClick="validar_cheque()">Agregar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div> 
<!--End modal cheque-->
      <div class="row">
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right"> 
              <li class=""><a href="#mpagos" data-toggle="tab"><strong>Paso 2 - </strong> Medio de pago</a></li> 
              <li class="active"><a href="#mcliente" data-toggle="tab"><strong>Paso 1 - </strong>Cliente</a></li> 
              <li class="pull-left header"><i class="fa fa-th"></i>Agregar Saldo</li>
            </ul>
            <div class="tab-content ">
           
            <!--Tab nueva venta-->
              <div class="tab-pane row  active" id="mcliente"> 
                   <div class="col-sm-6">

                     <div class="col-sm-6" style="padding: 0px;">
                        <label>Nombre</label>
                        <input id="nombre" class="form-control col-sm-" type="text" name="nombre">
                     </div>
                      
                     <div class="col-sm-6" style="padding: 0px;">
                       <label>RUT</label>
                        <input data-mask="000" onKeyup="set_rut()" id="rut" class="form-control" type="text" name="rut" maxlength="10">
                     </div>

                      <div class="col-sm-6" style="padding: 0px;">
                        <label>Correo</label>
                        <input id="correo_datos" class="form-control  correo" type="text" name="correo">
                     </div>
                      
                     <div class="col-sm-6" style="padding: 0px;">
                       <label>Dirección</label>
                        <input id="direccion" class="form-control" type="text" name="dir">
                     </div>

                     <div class="col-sm-6" style="padding: 0px;">
                        <label>Teléfono</label>
                        <input id="telefono" class="form-control  numeric" type="text" name="nombre">
                     </div>
                      
                     <div class="col-sm-6" style="padding: 0px;">
                       <label>Celular</label>
                        <input id="celular" class="form-control numeric" type="text" name="celular">
                     </div>

                      <div class="col-sm-12" style="padding: 0px;padding-top: 10px;margin-bottom:10px;">
                        <button onClick="validar_formularios(1,1)" class="btn btn-primary form-control">Siguiente</button>
                     </div> 
                   </div>  

                   <div class="col-xsm-6 text-center">
                     <img src="local/resources/views/iconos/id-card.png" style="width: 220px;">
                   </div> 
              </div>


              <!--Tab productos-->
               
              <!--Tab medios de pago-->
              <div class="tab-pane row" id="mpagos"> 
                   <div class="col-sm-6">   
                   <table class="table table-condensed table-bordered table-hover">
                      <tbody><tr> 
                        <th style="width: 100px;">Detalle</th>
                        <th>Monto <a class="pull-right" href="#" data-toggle="modal" data-target="#modal_opciones">(+) Opciones</a> </th>  
                      </tr>
                      <tr> 
                        <td>Efectivo</td> 
                        <td> <input   value="0" id="pago_efectivo" class="money" type="" name="" style="height: 20px;width: 80px;"></td> 
                      </tr> 

                       <tr> 
                        <td>Tarjeta <a href="#"  data-toggle="modal" data-target="#modal_tarjeta"><strong>(+)</strong></a> </td> 
                        <td> <input value="0" id="pago_total_tarjeta" readonly="" type="" name="" style="height: 20px;border: 0px;width: 80px;"></td>
                      </tr> 
                      
                      <tr> 
                        <td>Cheque <a href="#" data-toggle="modal" data-target="#modal_cheque"><strong>(+)</strong></a> <strong></strong></td> 
                        <td> <input value="0" id="pago_total_cheque" readonly="" type="" name="" style="height: 20px;border: 0px;width: 80px;"></td>
                      </tr> 

                      <tr> 
                        <td>OC</td> 
                        <td> <input value="0" id="pago_orden_compra" class="numeric" type="" name="" style="height: 20px;width: 80px;"></td>
                      </tr> 

                      <tr> 
                        <td>Transferencia</td> 
                        <td> <input   value="0" id="pago_transferencia" class="money" type="" name="" style="height: 20px;width: 80px;"></td>
                      </tr> 
                       <tr> 
                        <td><strong>Total</strong></td> 
                        <td> <input value="0" id="pago_total" class="money" readonly="" type="" name="" style="height: 20px;border: 0px;width: 80px;">
                      
                        </td>
                      </tr> 
                    </tbody>
                </table> 
                      <div class="col-sm-12" style="padding: 0px;padding-top: 10px;margin-bottom:10px;">
                        <button onclick=""  class="btn btn-primary form-control">Procesar venta</button>
                     </div> 
                   </div>  

                   <div class="col-xsm-6 text-center">
                     <img src="local/resources/views/iconos/payments.jpg" style="width: 220px;">
                   </div> 
              </div>
                
            </div>
            <!-- /.tab-content --> 
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
</body>
</html>

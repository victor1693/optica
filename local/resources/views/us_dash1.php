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
            <th>COD- Referencia</th>
            <th>Ver</th>
            <th>Eliminar</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Tarjeta</td>
              <td><strong>8F7E9Q168EF</strong></td>
              <td><a href="#"><i class="fa fa-eye"></i></a><a href="#"></a></td>
              <td><a href="#"><i style=" margin-left: 5px;" class="fa fa-trash"></i></a></td>
            
            </tr>
          </tbody>
        </table>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Agregar</button>
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
            <input   id="correo" name="correo" type="text" class="form-control money" placeholder="Total">
            <span class="glyphicon glyphicon-usd form-control-feedback"></span>
          </div>

          <div class="form-group col-xs-6" style="padding: 0px;">
             <select class="form-control">
               <option>Tarjeta</option>
               <option value="">RedCompra</option>
               <option value="">MasterCard</option>
               <option value="">Visa</option>
               <option value="">AbcDin</option>
             </select>
          </div>

           <div class="form-group col-xs-6"  style="padding: 0px;">
             <select class="form-control">
               <option>Cuotas</option>
               <option value="">1</option>
               <option value="">2</option>
               <option value="">3</option>
               <option value="">4</option>
               <option value="">5</option>
               <option value="">6</option>
               <option value="">7</option>
               <option value="">8</option>
               <option value="">9</option>
               <option value="">10</option>
               <option value="">11</option>
               <option value="">12</option>
             </select>
          </div>

          <div class="col-xs-12" style="padding: 0px;">
            <div class="form-group has-feedback">
            <input id="correo" name="correo" type="text" class="form-control numeric" placeholder="Nº Operación">
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <img src="local/resources/views/img/tarjeta.png" style="width: 200px;">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Agregar</button>
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
             <select class="form-control">
               <option>Banco</option>  
             </select>
          </div> 
           <div class="form-group col-xs-6"  style="padding: 0px;">
           <label>Nº de cuenta</label><br>
            <input class="form-control numeric" placeholder="Nº de cuenta" type="" name="">
          </div> 
            <div class="form-group col-xs-6"  style="padding: 0px;">
            <label>Nº de cheque</label><br>
              <input class="form-control  numeric" placeholder="Nº de cheque" type="" name="">
            </div>
           
            <div class="form-group col-xs-6"  style="padding: 0px;">
              <label>Fecha de cobro</label><br>
              <input id="" class="form-control datapicker" placeholder="Fecha de cobro" name="">
            </div>

            <div class="form-group col-xs-6"  style="padding: 0px;">
               <label>Código</label><br>
              <input class="form-control numeric" placeholder="Código" type="" name="">
            </div>
           
            <div class="form-group col-xs-6"  style="padding: 0px;">
             <label>Teléfono</label><br>
              <input class="form-control numeric" placeholder="Teléfono" type="" name="">
            </div>

             <div class="form-group col-xs-6"  style="padding: 0px;">
              <label>RUT</label><br>
              <input class="form-control  numeric" placeholder="RUT" type="" name="">
            </div>
            <div class="form-group col-xs-6 "  style="padding: 0px;">
             <label>Total</label><br>
              <input class="form-control money" placeholder="Total" type="" name="">
            </div> 
        </div>
         <div class="col-sm-5 text-center" style="padding-top: 40px;">
        <img class="img-responsive"  src="http://www.scorezero.com/wp-content/uploads/2009/12/cheque-sync.png" >
      </div>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Agregar</button>
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
              <li><a href="#mpagos" data-toggle="tab"><strong>Paso 3 - </strong> Medio de pago</a></li>
              <li><a href="#mproductos" data-toggle="tab"><strong>Paso 2 - </strong>Producto</a></li>
              <li class="active"><a href="#mcliente" data-toggle="tab"><strong>Paso 1 - </strong>Cliente</a></li> 
              <li class="pull-left header"><i class="fa fa-th"></i>Nueva venta</li>
            </ul>
            <div class="tab-content ">
           
            <!--Tab nueva venta-->
              <div class="tab-pane row active" id="mcliente"> 
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
              <div class="tab-pane row" id="mproductos"> 
                  
                   <div class="col-sm-12">
                
                    <div class="col-sm-12 text-center">
                        <select id="select_producto" onChange="paginar_producto(this.value)" class="form-control" style="width: 200px;margin: 0 auto;"> 
                          <option value="">Producto</option>
                          <option value="lentes_cerca">Lentes de cerca</option>
                          <option value="lentes_lejos">Lentes de lejos</option>
                          <option value="lentes_tarspaso">Traspaso</option>
                          <option value="lentes_contacto">Lentes de contacto</option>
                          <option value="lentes_sol">Lentes de sol</option>
                          <option value="otros_lentes_selector">Otros</option> 
                      </select> 
                    </div>
                        <!--otros-->  
                    <div class="col-sm-12 control_producto" id="otros_lentes_selector" style="display: none;">
                        <h4 class="text-center">Otros</h4>                 
                          <div class="col-xs-12" style="padding: 0px;"> 
                            <div class="col-sm-3">
                            <select id="len_otros_ajuste" class="form-control">
                            <option value="">Ajuste</option>
                            <option value="Cordon">Cordon</option>
                            <option value="liquido_limpieza">liquido limpieza</option>
                            <option value="estuche">estuche</option>
                            <option value="liquido_lente">liquido lente c ontacto</option>
                            <option value="pano">paño limpieza</option>
                            <option value="plaquetas">plaquetas</option>
                            <option value="tornillos">tornillos</option>
                            <option value="lente_contacto">lente contacto cosmetico</option>
                            </select> 
                            </div>
                             
                         </div> 
                         <div class="col-xs-12"> 
                             <label>Observaciones</label>
                             <textarea id="len_otros_observaciones" class="form-control" style="resize: none;width: 100%;" maxlength="50"></textarea>
                         </div>
                         <div class="col-sm-12 text-center" style="padding-top: 5px;">
                            <a onClick="validar_formularios(2,1)" data-toggle="tab" class="form-control btn btn-primary" style="max-width: 200px;">Siguiente</a>
                         </div>
                       </div>   

                       <!--Lentes de lentes de cerca-->
                      <div class="col-sm-12 control_producto" id="lentes_cerca"  style="display: none;">
                            <h4 class="text-center lentes_cerca">Lentes de cerca</h4>
                             <div class="col-xs-12" style="padding: 0px;">
                                <div class="col-sm-3"><input id="len_cer_cristales" class="form-control" style="width: 100%;" placeholder="Cristales"></input> </div>
                                <div class="col-sm-3">
                                <select id="len_cer_armazon" class="select2 form-control " style="width: 100%;">
                                <option value="">Armazon</option>
                                <?php foreach ($armazones as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->marca.'</option>';
                                } ?>
                                </select></div>
                                <div class="col-sm-3"><input id="len_cer_codigo" class="form-control" type="text" name="" placeholder="Código"></div>
                                <div class="col-sm-3"><select id="len_cer_cil_derecho" class="form-control select2" style="width: 100%;"><option value="">CIL (Derecho)</option>
                                   <?php foreach ($datos as $key) {
                                   echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                                  } ?>
                                </select></div>
                             </div>
                              <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                                <div class="col-sm-3"><select id="len_cer_esf_derecho" class="form-control select2" style="width: 100%;"><option value="">ESF (Derecho)</option>
                                   <?php foreach ($datos as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                                } ?>
                                </select> </div>
                                <div class="col-sm-3"><select id="len_cer_eje_derecho" class="form-control select2" style="width: 100%;"><option value="">EJE (Derecho)</option>
                                   <?php foreach ($datos as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                                } ?>
                                </select></div> 
                                <div class="col-sm-3"><select id="len_cer_cil_izquierdo" class="form-control select2" style="width: 100%;">
                                <option value="">CIL (Izquierdo)</option>
                                <?php foreach ($datos as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                                } ?>
                                </select></div>
                                 <div class="col-sm-3"><select id="len_cer_esf_izquierdo" class="form-control select2" style="width: 100%;">
                                 <option value="">ESF (Izquierdo)</option>
                                   <?php foreach ($datos as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                                } ?>
                                 </select></div>
                             </div>
                              <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                                <div class="col-sm-3"><select id="len_cer_eje_izquierdo" class="form-control select2" style="width: 100%;">
                                <option value="">EJE (izquierdo)</option> 
                                 <?php foreach ($sucursal as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->descripcion.'</option>';
                                } ?>
                                </select> </div>
                                <div class="col-sm-3"><select id="len_cer_dp" class="form-control select2" style="width: 100%;">
                                <option value="">DP</option>
                                  <?php foreach ($dp as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->dp.'</option>';
                                } ?></select></div> 
                                <div class="col-sm-3"><select id="len_cer_seguro" class="form-control select2" style="width: 100%;"> 
                                    <option value="">Seguro</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select></div> 
                             </div> 
                              <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                                <div class="col-sm-3"><select id="len_cer_oftalmologo" class="form-control select2" style="width: 100%;"><option value="">Oftalmólogo</option>
                                <?php foreach ($medicos as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->nombre.'</option>';
                                } ?>
                                </select> </div>
                                <div class="col-sm-3">

                                <input type="text" id="lentest_cer_fecha_entrega" class="form-control datapicker" placeholder="Fecha de entrega" name=""></div> 
                                <div class="col-sm-3">
                                <select id="len_cer_sucursal" class="form-control select2" style="width: 100%;">
                                <option value="">Sucursal de retiro</option>
                                 <?php foreach ($sucursal as $key) {
                                 echo'<option value="'.$key->id.'">'.$key->descripcion.'</option>';
                                } ?>
                                </select>
                                </div> 
                             </div>
                             <div class="col-xs-12"> 
                                 <label>Observaciones</label>
                                 <textarea id="len_cer_observacion" class="form-control" style="resize: none;width: 100%;" maxlength="50"></textarea>
                             </div>
                             <div class="col-sm-12 text-center" style="padding-top: 5px;">
                                <a onClick="validar_formularios(2,1)" data-toggle="tab" class="form-control btn btn-primary" style="max-width: 200px;">Siguiente</a>
                             </div>
                       </div>   
                        

                        <!--Lentes de lejos-->
                        <!--Lentes de lentes de lejos-->
                      <div class="col-sm-12 control_producto" id="lentes_lejos"   style="display: none;">
                        <h4 class="text-center">Lentes de lejos</h4>
                         <div class="col-xs-12" style="padding: 0px;">
                            <div class="col-sm-3"><input id="len_lej_cristales" class="form-control" placeholder="Cristales" style="width:100%;"/> </div>
                            <div class="col-sm-3"><select id="len_lej_armazon" class="form-control select2" style="width:100%;"><option value="">Armazon</option> 
                             <?php foreach ($armazones as $key) {
                               echo'<option value="'.$key->id.'">'.$key->marca.'</option>';
                              } ?></select></div>
                            <div class="col-sm-3"><input id="len_lej_codigo" class="form-control" type="text" name="" placeholder="Código"></div>
                            <div class="col-sm-3"><select id="len_lej_cil_derecho" class="form-control select2" style="width:100%;"><option value="">CIL (Derecho)</option>
                             <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                              </select>
                            </div>
                         </div>
                          <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                            <div class="col-sm-3"><select id="len_lej_esf_derecho" class="form-control select2" style="width:100%;"><option value="">ESF (Derecho)</option>
                               <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                            </select> </div>
                            <div class="col-sm-3"><select id="len_lej_eje_derecho" class="form-control select2" style="width:100%;"><option value="">EJE (Derecho)</option>
                               <?php foreach ($eje as $key) {
                               echo'<option value="'.$key->id.'">'.$key->eje.'</option>';
                              } ?>
                            </select></div> 
                            <div class="col-sm-3"><select id="len_lej_cil_izquierdo" class="form-control select2" style="width:100%;"><option value="">CIL (Izquierdo)</option>
                               <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                            </select></div>
                             <div class="col-sm-3"><select id="len_lej_esf_izquierdo" class="form-control select2" style="width:100%;"><option value="">ESF (Izquierdo)</option>
                              <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?></select></div>
                         </div>
                          <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                            <div class="col-sm-3"><select id="len_lej_eje_izquierdo" class="form-control select2" style="width:100%;"><option value="">EJE (izquierdo)</option>
                             <?php foreach ($eje as $key) {
                               echo'<option value="'.$key->id.'">'.$key->eje.'</option>';
                              } ?></select> </div>
                            <div class="col-sm-3"><select id="len_lej_dp" class="form-control select2" style="width:100%;"><option value="">DP</option>
                             <?php foreach ($dp as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dp.'</option>';
                              } ?></select></div> 
                            <div class="col-sm-3"><select id="len_lej_seguro" class="form-control select2" style="width:100%;"><option value="">Seguro</option>
                            <option value="A">A</option>
                            <option value="A">B</option>
                            <option value="A">C</option>
                            <option value="A">D</option>

                            </select></div>

                            <div class="col-sm-3"><select id="len_lej_h_derecha" class="form-control select2" style="width:100%;"><option value="">H (Derecha)</option>
                             <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                              </select></div>  
                         </div>

                          <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                            <div class="col-sm-3"><select id="len_lej_h_izquierda" class="form-control select2" style="width:100%;"><option value="">H (Izquierda)</option>
                             <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                            </select></div>
                            <div class="col-sm-3"><select id="len_lej_oftalmologo" class="form-control select2" style="width:100%;"><option value="">Oftalmólogo</option>
                             <?php foreach ($medicos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->nombre.'</option>';
                              } ?></select> </div>
                            <div class="col-sm-3"><input id="len_lej_fecha" placeholder="Fecha de entrega" type="text" class="form-control datapicker" name=""></div> 
                            <div class="col-sm-3"><select id="len_lej_sucursal" class="form-control select2" style="width:100%;"><option value="">Sucursal de retiro</option>
                               <?php foreach ($sucursal as $key) {
                               echo'<option value="'.$key->id.'">'.$key->descripcion.'</option>';
                              } ?>
                            </select></div> 
                         </div>
                             <div class="col-xs-12"> 
                             <label>Observaciones</label>
                             <textarea id="len_lej_observaciones" class="form-control" style="resize: none;width: 100%;" maxlength="50"></textarea>
                         </div>
                         <div class="col-sm-12 text-center" style="padding-top: 5px;">
                            <a onClick="validar_formularios(2,1)" data-toggle="tab" class="form-control btn btn-primary" style="max-width: 200px;">Siguiente</a>
                         </div>
                       </div>  

                    <!--Lentes de lentes de traspaso-->
                      <div class="col-sm-12 control_producto" id="lentes_tarspaso"   style="display: none;">
                        <h4 class="text-center">Traspaso</h4>
                         <div class="col-xs-12" style="padding: 0px;">
                       
                            <div class="col-sm-3"><select id="len_tras_armazon" class="form-control select2" style="width:100%;"><option value="">Armazon</option>
                                <?php foreach ($armazones as $key) {
                               echo'<option value="'.$key->id.'">'.$key->marca.'</option>';
                              } ?>
                            </select>
                             
                            </div>
                            <div class="col-sm-3"><input id="len_tras_codigo" class="form-control" type="text" name="" placeholder="Código"></div>
                             <div class="col-sm-3"><select id="len_tras_dp" class="form-control select2" style="width:100%;"><option value="">DP</option>
                               <?php foreach ($dp as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dp.'</option>';
                              } ?>
                             </select></div>  
                            <div class="col-sm-3"><select id="len_tras_h_derecha" class="form-control select2" style="width:100%;"><option value="">H (Derecha)</option>
                               <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                            </select></div> 
                         </div>
                          <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                          <div class="col-sm-3"><select id="len_tras_h_izquierda" class="form-control select2" style="width:100%;"><option value="">H (Izquierda)</option>
                             <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                          </select></div>
                            <div class="col-sm-3"><select id="len_tras_oftalmologo" class="form-control select2" style="width:100%;"><option value="">Oftalmólogo</option>
                              <?php foreach ($medicos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->nombre.'</option>';
                              } ?>
                            </select> </div>
                             <div class="col-sm-3"><input placeholder="Fecha de entrega" id="len_tras_fecha" type="text" class="form-control datapicker" name=""></div> 
                            <div class="col-sm-3"><select id="len_tras_sucursal" class="form-control select2" style="width:100%;"><option value="">Sucursal de retiro</option> 
                               <?php foreach ($sucursal as $key) {
                               echo'<option value="'.$key->id.'">'.$key->descripcion.'</option>';
                              } ?>
                            </select></div>
                         </div>
                          
                         <div class="col-xs-12"> 
                             <label>Observaciones</label>
                             <textarea id="len_tras_observaciones" class="form-control" style="resize: none;width: 100%;" maxlength="50"></textarea>
                         </div>
                         <div class="col-sm-12 text-center" style="padding-top: 5px;">
                             <a onClick="validar_formularios(2,1)" data-toggle="tab" class="form-control btn btn-primary" style="max-width: 200px;">Siguiente</a>
                         </div>
                       </div> 

                      <!--Lentes de lentes de contacto-->
                      <div class="col-sm-12 control_producto" id="lentes_contacto"  style="display: none;" >
                        <h4 class="text-center">Lentes de contacto</h4>
                 
                          <div class="col-xs-12" style="padding: 0px;">
                            <div class="col-sm-3"><select  id="len_contac_esf_derecho" class="form-control select2" style="width:100%;"><option value="">ESF (Derecho)</option>
                               <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                            </select> </div>
                            <div class="col-sm-3"><select id="len_contac_eje_derecho" class="form-control select2" style="width:100%;"><option value="">EJE (Derecho)</option>
                               <?php foreach ($eje as $key) {
                               echo'<option value="'.$key->id.'">'.$key->eje.'</option>';
                              } ?>
                            </select></div> 
                            <div class="col-sm-3"><select id="len_contac_cil_izquierdo" class="form-control select2" style="width:100%;"><option value="">CIL (Izquierdo)</option>
                               <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                            </select></div>
                             <div class="col-sm-3"><select id="len_contac_eje_izquierdo" class="form-control select2" style="width:100%;"><option value="">EJE (izquierdo)</option>
                               <?php foreach ($eje as $key) {
                               echo'<option value="'.$key->id.'">'.$key->eje.'</option>';
                              } ?>
                             </select></div>
                         </div>
                          <div class="col-xs-12" style="padding: 0px;margin-top: 5px;">
                            <div class="col-sm-3"><select id="len_contac_cil_derecho" class="form-control select2" style="width:100%;"><option value="">CIL (Derecho)</option>
                              <?php foreach ($datos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dioptria.'</option>';
                              } ?>
                            </select> </div>
                            <div class="col-sm-3"><select id="len_contac_dp" class="form-control select2" style="width:100%;"><option value="">DP</option>
                               <?php foreach ($dp as $key) {
                               echo'<option value="'.$key->id.'">'.$key->dp.'</option>';
                              } ?>
                            </select></div> 
                            <div class="col-sm-3"><select id="len_contac_seguro" class="form-control select2" style="width:100%;"><option value="">Seguro</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option> 
                            </select></div>
                            <div class="col-sm-3"><select id="len_contac_oftalmologo" class="form-control select2" style="width:100%;"><option value="">Oftalmólogo</option>
                               <?php foreach ($medicos as $key) {
                               echo'<option value="'.$key->id.'">'.$key->nombre.'</option>';
                              } ?>
                            </select> </div> 
                         </div>

                          <div class="col-xs-12" style="padding: 0px;margin-top: 5px;"> 
                            <div class="col-sm-3"><input placeholder="Fecha de entrega" id="len_contac_fecha" type="text" class="form-control datapicker" name=""></div> 
                            <div class="col-sm-3"><select id="len_contac_sucursal" class="form-control select2" style="width:100%;"><option value="">Sucursal de retiro</option>
                               <?php foreach ($sucursal as $key) {
                               echo'<option value="'.$key->id.'">'.$key->descripcion.'</option>';
                              } ?>
                            </select></div> 
                         </div>
                          <div class="col-xs-12"> 
                             <label>Observaciones</label>
                             <textarea id="len_contac_observaciones" class="form-control" style="resize: none;width: 100%;" maxlength="50"></textarea>
                         </div>
                         <div class="col-sm-12 text-center" style="padding-top: 5px;">
                                 <a onClick="validar_formularios(2,1)" data-toggle="tab" class="form-control btn btn-primary" style="max-width: 200px;">Siguiente</a>
                         </div>
                       </div>    
                     <!--Lentes de lentes de sol-->
                      <div class="col-sm-12 control_producto" id="lentes_sol"  style="display: none;" >
                        <h4 class="text-center">Lentes de sol</h4>                 
                          <div class="col-xs-12" style="padding: 0px;">
                            <div class="col-sm-3">
                            <select id="len_sol_armazon" class="form-control select2" style="width:100%;"><option value="">Armazon</option>
                             <?php foreach ($armazones as $key) {
                               echo'<option value="'.$key->id.'">'.$key->marca.'</option>';
                              } ?>
                            </select> </div>
                            <div class="col-sm-3"><input id="len_sol_codigo" class="form-control" type="text" name="" placeholder="Código"></div
                         </div> 
                        <div class="col-xs-12"> 
                             <label>Observaciones</label>
                             <textarea id="len_sol_observaciones" class="form-control" style="resize: none;width: 100%;" maxlength="50"></textarea>
                         </div>
                         <div class="col-sm-12 text-center" style="padding-top: 5px;">
                          <div class="col-sm-12 text-center" style="padding-top: 5px;">
                                 <a onClick="validar_formularios(2,1)" data-toggle="tab" class="form-control btn btn-primary" style="max-width: 200px;">Siguiente</a>
                         </div>
                         </div>
                       </div>   
                    </div> 

                        <!--Lentes de lejos-->
                  </div>
              </div>

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
                        <td> <input class="money" type="" name="" style="height: 20px;width: 80px;"></td> 
                      </tr> 

                       <tr> 
                        <td>Tarjeta <a href="#"  data-toggle="modal" data-target="#modal_tarjeta"><strong>(+)</strong></a> </td> 
                        <td> <input readonly="" type="" name="" style="height: 20px;border: 0px;width: 80px;"></td>
                      </tr> 
                      
                      <tr> 
                        <td>Cheque <a href="#" data-toggle="modal" data-target="#modal_cheque"><strong>(+)</strong></a> <strong></strong></td> 
                        <td> <input readonly="" type="" name="" style="height: 20px;border: 0px;width: 80px;"></td>
                      </tr> 

                      <tr> 
                        <td>OC</td> 
                        <td> <input class="numeric" type="" name="" style="height: 20px;width: 80px;"></td>
                      </tr> 

                      <tr> 
                        <td>Transferencia</td> 
                        <td> <input readonly="" type="" name="" style="height: 20px;border: 0px;width: 80px;"></td>
                      </tr> 
                       <tr> 
                        <td><strong>Total</strong></td> 
                        <td> <input class="money" readonly="" type="" name="" style="height: 20px;border: 0px;width: 80px;"></td>
                      </tr> 
                    </tbody>
                </table> 
                      <div class="col-sm-12" style="padding: 0px;padding-top: 10px;margin-bottom:10px;">
                        <button class="btn btn-primary form-control">Procesar venta</button>
                     </div> 
                   </div>  

                   <div class="col-xsm-6 text-center">
                     <img src="local/resources/views/iconos/payments.jpg" style="width: 220px;">
                   </div> 
              </div>
                
            </div>
            <!-- /.tab-content -->

             <div class='col-lg-4 col-md-4 col-sm-12' style="padding: 0px;margin-top: 15px;">
                <input  class="form-control" type="" name="" placeholder="Buscar...">               
            </div>
              <div class='col-lg-4 col-md-4 col-sm-12' style="padding: 0px;margin-top: 15px;">
                 <button class="btn btn-primary btn-danger" style="margin-left: 10px;">Hoy</button>
                <button class="btn btn-primary  btn-danger" style="margin-left: 10px;">Últimos 7 días</button>
                <button class="btn btn-primary  btn-danger" style="margin-left: 10px;">Todo</button>             
            </div>

            <div class="col-sm-12" style="padding: 0px;margin-top: 20px;">
           
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Resumen</h3>
              <a href="" class="pull-right" style="padding-left: 10px;">Resumen diario</a>
              <a href="" class="pull-right">Datos contabilizados</a>
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
                  <th>Abonar</th>
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
                    <td>
                       <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> 
                        <i class="fa fa-credit-card"></i>
                      </a>
                    </td>
                  <td>
                    <li class="dropdown"  style="list-style: none;">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> 
                        <i class="fa fa-print"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Interno</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">OT</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cliente</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rep</a></li> 
                      </ul>
                    </li>
                  </td> 
                  <td>
                    <li class="dropdown"  style="list-style: none;">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> 
                        <i class="fa fa-edit"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cliente</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Producto</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Medio de pago</a></li> 
                      </ul>
                    </li>
                  </td> 
                
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


  <div class="control-sidebar-bg"></div>
</div>
<?php include('local/resources/views/includes/referencias_down.php');?>
<?php include('local/resources/views/includes_js/us_dash.php');?>
</body>
</html>

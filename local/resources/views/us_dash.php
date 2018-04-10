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

  <style type="text/css">
  .bloque_1
  {
    width: 50px;
    height: 18px;
    margin-left: 5px;
  }
  .bloque_2
  {
    width: 100%;
    height: 18px;
    margin-left: 10px;
    margin-right: 10px;
  }
</style>
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
 
 
   
<!--modal cheque-->
  
      <div class="row">
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right"> 
               
              <li><a href="#mproductos active" data-toggle="tab"><strong></strong></a></li>
              
              <li class="pull-left header"><i class="fa fa-th"></i>Ventas</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
              <div class="tab-pane row active" id="mproductos">  

                    <div class="col-sm-12 text-center" style="padding: 0px;margin-bottom: 15px;">  
                      <div class="col-sm-6">
                        <div class="col-sm-12">
                          <h4 class="box-title">RUT del cliente</h4>
                        </div> 
                        <input maxlength="10" onkeyup="formatear('#rut')" id="rut" style="max-width: 250px;margin: 0 auto;" class="form-control control_input numeric" type="text" id="buscador" placeholder="12345678-9"> 
                        <button onClick="cliente($('#rut').val())"  style="max-width: 150px;margin-top: 15px;" class="form-cotnrol btn btn-danger btn-sm">Buscar cliente</button> 
                      </div>
                      <div class="col-sm-6 text-left" style="border-left: 1px solid #919191;">
                      <div class="col-sm-12" style="padding:0;">
                          <h4 class="box-title">Datos del cliente</h4>
                        </div> 
                      <strong>RUT: </strong><span id="detalle_rut"></span><br>
                       <strong>Correo: </strong><span id="detalle_correo"></span><br>
                      <strong>Dirección: </strong><span id="detalle_direccion"></span><br>
                       <strong>Teléfonos: </strong><span id="detalle_telefonos"></span><br>
                      </div>
                    </div>  
              </div> 
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div> 


<!--Productos-->
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">                
              <li><a href="#mproductos active" data-toggle="tab"><strong></strong></a></li>              
              <li class="pull-left header"><i class="fa fa-th"></i>Producto</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
              <div class="tab-pane row active" id="mproductos">  
               <div class="col-sm-3">
                 <table style="margin: 0 auto;">
                   <tr>
                     <td></td>
                     <td class="text-center">DE</td>
                     <td class="text-center">IZ</td>
                   </tr>
                   <tr>
                     <td><strong>CIL</strong></td>
                     <td>
                      <select id="pro_cil_de" class="bloque_2  selectores" >
                      <option value="">Seleccionar</option>                     
                      <?php foreach ($datos as $key) {
                        echo "<option value='".$key->id."'>".$key->dioptria."</option>";
                      }?>                        
                     </select> 
                     </td>
                     <td>
                       <select id="pro_cil_iz" class="bloque_2 selectores" >  
                       <option value="">Seleccionar</option>                    
                       <?php foreach ($datos as $key) {
                        echo "<option value='".$key->id."'>".$key->dioptria."</option>";
                      }?>                        
                     </select> 
                     </td>
                   </tr>
                   <tr>
                     <td><strong>EJE</strong></td>
                     <td>
                       <select id="pro_eje_de" class="bloque_2 selectores"  >  
                       <option value="">Seleccionar</option>                     
                       <?php foreach ($eje as $key) {
                        echo "<option value='".$key->id."'>".$key->eje."</option>";
                      }?>                        
                     </select> 
                     </td>
                     <td>
                        <select id="pro_eje_iz" class="bloque_2 selectores"  > 
                        <option value="">Seleccionar</option>                     
                       <?php foreach ($eje as $key) {
                        echo "<option value='".$key->id."'>".$key->eje."</option>";
                      }?>                        
                     </select> 
                     </td>
                   </tr>
                   <tr>
                     <td><strong>ESF</strong></td>
                     <td>
                       <select id="pro_esf_de" class="bloque_2 selectores"  >
                       <option value="">Seleccionar</option>                        
                     <?php foreach ($datos as $key) {
                        echo "<option value='".$key->id."'>".$key->dioptria."</option>";
                      }?>                        
                     </select> 
                     </td>
                     <td>
                       <select id="pro_esf_iz" class="bloque_2 selectores"  > 
                       <option value="">Seleccionar</option>  
                       <?php foreach ($datos as $key) {
                        echo "<option value='".$key->id."'>".$key->dioptria."</option>";
                      }?>                        
                     </select> 
                     </td>
                   </tr>
                    <tr>
                     <td><strong>H</strong></td>
                     <td>
                       <select id="pro_h_de" class="bloque_2 selectores" >
                       <option value="0">Seleccionar</option>                         
                       <?php foreach ($datos as $key) {
                        echo "<option value='".$key->id."'>".$key->dioptria."</option>";
                      }?>                    
                     </select> 
                     </td>
                     <td>
                       <select id="pro_h_iz" class="bloque_2 selectores"  >
                       <option value="0">Seleccionar</option>  
                       <?php foreach ($datos as $key) {
                        echo "<option value='".$key->id."'>".$key->dioptria."</option>";
                      }?>                         
                     </select> 
                     </td>
                   </tr>
                 </table>
               </div>

               <div class="col-sm-3" style="padding-top: 18px;">   
                     <select id="pro_producto" class="bloque_2 selectores" style="margin-top: 2px;">
                        <option value="">Producto</option>
                          <option value="lentes_cerca">Lentes de cerca</option>
                          <option value="lentes_lejos">Lentes de lejos</option>
                          <option value="lentes_traspaso">Traspaso</option>
                          <option value="lentes_contacto">Lentes de contacto</option>
                          <option value="lentes_sol">Lentes de sol</option>
                          <option value="otros_lentes">Otros</option> 
                     </select> 
                     <select id="pro_dp" class="bloque_2 selectores"  >
                      <option value="">DP</option>
                      <?php foreach ($dp as $key) {
                        echo "<option value='".$key->id."'>".$key->dp."</option>";
                      }?>                       
                     </select> 
                      <input id="pro_codigo" placeholder="Código" class="bloque_2 control_input" type="" name="">
                      <input id="pro_dc" placeholder="DC" class="bloque_2 control_input" type="" name="">
                </div>
                <div class="col-sm-3" style="padding-top: 18px;"> 
                      <select  class="bloque_2 selectores" id="pro_armazon">
                      <option value="">Armazon</option>
                      <?php foreach ($armazones as $key) {
                        echo "<option value='".$key->id."'>".$key->marca."</option>";
                      }?>                       
                     </select> 
                      <select class="bloque_2 selectores" id="pro_seguro">
                      <option value="">Seguro</option>
                       <option value="A">A</option>
                       <option value="B">B</option>
                       <option value="C">C</option>
                       <option value="D">D</option>                    
                     </select> 
                      <select class="bloque_2 selectores" id="pro_sucursal">
                      <option value="0">Sucursal</option>
                      <?php foreach ($sucursal as $key) {
                        echo "<option value='".$key->id."'>".$key->descripcion."</option>";
                      }?>                       
                     </select>
                     <select class="bloque_2 selectores" id="pro_otros">
                      <option value="">Otros productos</option>
                       <option value="Ajuste">  Ajuste  </option>
                        <option value="Cordon"> Cordon  </option>
                        <option value="liquido limpieza"> liquido limpieza  </option>
                        <option value="estuche"> estuche </option>
                        <option value="liquido lente contacto"> liquido lente contacto </option>
                        <option value="paño limpieza"> paño limpieza </option>
                        <option value="plaquetas"> plaquetas </option>
                        <option value="tornillos"> tornillos </option>
                        <option value="lente contacto cosmetico"> lente contacto cosmetico  </option> 
                     </select> 
                </div>

                <div class="col-sm-3" style="padding-top: 18px;">   
                       <input id="pro_cristales" placeholder="Cristales" class="bloque_2 control_input" type="" name="">  
                      <input id="pro_fecha_entrega" placeholder="fecha de entrega" class="bloque_2 control_input datapicker" type="text" name="">  
                       <select class="bloque_2 selectores" id="pro_oftalmologo">
                       <option value="0">Oftálmologo</option>
                      <?php foreach ($medicos as $key) {
                        echo "<option value='".$key->id."'>".$key->nombre."</option>";
                      }?>                       
                     </select>   
                     <input id="pro_observaciones" placeholder="Observaciones" class="bloque_2 control_input"  type="" name=""> 
                 </div> 
                <div class="col-sm-12 text-center" style="padding-top: 15px;">
                <label>Total a pagar</label>
                 <input style="width: 250px;margin: auto;" class="form-control control_input numeric" type="" name="" id="pro_total" placeholder="Total a pagar">
               </div>
               <div class="col-sm-12 text-center" style="padding-top: 15px;">
                 <button onclick="crear_factura()" class="btn btn-danger btn-sm">Procesar pedido</button>
               </div>
              </div> 
          </div> 
        </div>
      </div>  


<!--Facturas-->
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right"> 
               
              <li><a href="#mproductos active" data-toggle="tab"><strong></strong></a></li>
              
              <li class="pull-left header"><i class="fa fa-th"></i>Facturas pendientes</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
              <div class="tab-pane row active" id="mproductos">  
                <table class="table table-condensed">
                  <thead >
                    <th>#</th>
                    <th>Cliente</th>
                    <th>RUT</th>
                    <th>Total</th>
                    <th>Detalle</th>
                    <th>Pagar</th>
                  </thead>
                  <tbody id="tabla_factura">
                    
                  </tbody>
                </table>
              </div> 
          </div> 
        </div>
      </div>   

 
    </section>

    <div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="modalClienteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="float: left;" class="modal-title" id="modalClienteLabel">Datos del cliente</h5>
        <button style="float: right;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
         <div class="col-sm-6">
         <input id="ruta" type="hidden" value="clientec" name="">
         <label>RUT</label><br>
         <input  maxlength="10" onkeyup="formatear('#modal_rut')" disabled="true" class="form-control numeric" id="modal_rut" type="text" name="">
          <label>Nombre</label><br>
         <input class="form-control " id="modal_nombre" type="text" name="">
          <label>Correo</label><br>
         <input class="form-control correo" id="modal_correo" type="text" name="">
       </div>
       <div class="col-sm-6">
        <label>Dirección</label><br>
         <input class="form-control " id="modal_direccion" type="text" name="">
          <label>Celular</label><br>
         <input class="form-control numeric" id="modal_celular" type="text" name="">
          <label>Teléfono</label><br>
         <input class="form-control numeric" id="modal_telefono" type="text" name="">
      </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button onclick="crear_cliente()" type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

    <!--Fin Modal agregar cliente-->
  </div>
  <!--Modal tipo de pago-->
  <!-- Modal -->
<div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="modalPagosLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="float: left;" class="modal-title" id="modalPagosLabel">Formulario de pago</h5>
        <button style="float: right;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <input id="id_factura" type="hidden" name="">
       <div class="row">
           <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#efectivo" data-toggle="tab">Efectivo</a></li>
              <li><a href="#transferencia" data-toggle="tab">Transferencia</a></li>
              <li><a href="#tarjetas" data-toggle="tab">Tarjeta</a></li>
              <li><a href="#cheques" data-toggle="tab">Cheques</a></li>  
            </ul>
            <div class="tab-content">
              <div class="tab-pane active text-center" id="efectivo">
               <img style="width: 200px;" src="local/resources/views/img/efectivo.png"><br><br>
                <label>Total en efectivo</label>
                 <input style="width: 200px;margin: 0 auto;" id="total_efectivo" class="form-control numeric" type="text" name="">
                 <div class="text-right"  style="margin-top: 20px;">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                  <button onclick="pagar_efectivo($('#id_factura').val())" type="button" class="btn btn-primary">Pagar</button>    
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane text-center" id="transferencia"> 
                <img style="width: 200px;" src="local/resources/views/img/transferencia.jpg"><br><br>
                <label>Total en transferencia</label>
                 <input style="width: 200px;margin: 0 auto;" id="total_transferencia" class="form-control numeric" type="text" name="">
                 <div class="text-right"  style="margin-top: 20px;">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                  <button onclick="pagar_transferencia($('#id_factura').val())" type="button" class="btn btn-primary">Pagar</button>    
                </div>

              </div>

              <div class="tab-pane text-center" id="cheques"> 
               <div class="row">
               <div class="col-sm-12">
                  <img style="width: 100px;" src="local/resources/views/img/cheque.png"><br><br>
               </div>
               <div class="col-sm-6">
                 <label>RUT</label><br>
                 <input id="che_rut" class="form-control" placeholder="RUT" type="text" name=""><br>
                 <label>Nº Cuenta</label><br>
                 <input id="che_cuenta" class="form-control numeric" placeholder="Nº Cuenta" type="text" name=""><br>
                 <label>Nº Cheque</label><br>
                 <input id="che_cheque" class="form-control numeric" placeholder="Nº Cheque" type="text" name=""><br>
                 <label>Banco</label><br>
                 <select id="che_banco" class="form-control">
                   <option value="">Banco</option
                   <option value="ES">Estado</option>
                        <option value="CH">Chile</option>
                        <option value="SA">Santander</option>
                        <option value="BC">BCI</option>
                        <option value="FA">Falabella</option>
                        <option value="BI">Bice</option>
                        <option value="SE">Security</option>
                        <option value="OT">Otro</option>>
                 </select>
                 
               </div>

               <div class="col-sm-6 text-center" >
               <label>Código</label><br>
                 <input id="che_codigo" class="form-control" placeholder="Código" type="text" name=""><br>
                 <label>Fecha</label><br>
                 <input id="che_fecha" class="form-control datepicker" placeholder="Fecha" type="text" name=""><br>
                 <label>Teléfono</label><br>
                 <input id="che_cheque" class="form-control numeric" placeholder="Teléfono" type="text" name=""><br>
                 <label>Total</label><br>
                 <input id="che_cheque" class="form-control numeric" placeholder="Total" type="text" name=""><br>
                
               </div>
              <div class="col-sm-12">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                  <button type="button" class="btn btn-primary">Pagar</button>
              </div>   
                </div>
             

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane text-center" id="tarjetas">
              <div class="row"> 
                <img style="width: 200px;" src="local/resources/views/img/tarjetas.png"><br><br>
 <div class="col-sm-5">
                  <label>Tarjeta</label><br>
                  <select id="select_tarjeta" class="form-control">
                    <option value="">Tarjeta</option>
                    <option value="RC">RedCompra</option>
                        <option value="MC">MasterCard</option>
                        <option value="VI">Visa</option>
                        <option value="AD">AbcDin</option>
                  </select>
                   <label>Cuotas</label><br>
                  <select id="cuotas" class="form-control">
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
                <div class="col-sm-7">
                  <label>Nº Operación</label><br>
                 <input placeholder="Nº Operación" style="width: 200px;margin: 0 auto;" id="operacion_transferencia" class="form-control numeric" type="text" name="">
                 <label>Total</label><br>
                 <input placeholder="Total" style="width: 200px;margin: 0 auto;" id="total_transferencia" class="form-control numeric" type="text" name=""> 
                  <div class="text-right"  style="margin-top: 20px;">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                  <button type="button" class="btn btn-primary">Pagar</button>    
                </div>
                </div>
                 </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
       </div>
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>        
      </div>-->
    </div>
  </div>
</div>
  <!--Fin modal tipo de pago-->

    <!--Modal agregar cliente-->

    <!-- Button trigger modal --> 
<!-- Modal -->

<div class="control-sidebar-bg"></div>
</div>
<?php include('local/resources/views/includes/referencias_down.php');?> 

<script type="text/javascript">

//Coloca el iddentidicador de la factura
function set_factura(id)
{
  $("#id_factura").val(id);
}
 //Funcion para validar RUP
  var Fn = 
  {
    // Valida el rut con su cadena completa "XXXXXXXX-X"
    validaRut : function (rutCompleto) {
      if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
        return false;
      var tmp   = rutCompleto.split('-');
      var digv  = tmp[1]; 
      var rut   = tmp[0];
      if ( digv == 'K' ) digv = 'k' ;
      return (Fn.dv(rut) == digv );
    },
    dv : function(T){
      var M=0,S=1;
      for(;T;T=Math.floor(T/10))
        S=(S+T%10*(9-M++%6))%11;
      return S?S-1:'k';
    }
  }
//Campos con formato de fecha
 $('.datapicker').datepicker({
      autoclose: true
    });
//envento enter en campo rut
 $("#rut").keyup(function(e) {
    if(e.keyCode == 13) {
      cliente($("#rut").val()); 
    }
});
 
 //Validar correos
$('.correo').change(function (e) {
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var EmailId = this.value;
    if (emailRegex.test(EmailId))
        this.style.color = "";
    else
        this.style.color = "red";
});
//Tipo numerico en los input
 $(".numeric").keyup(function (){
 this.value = (this.value + '').replace(/[^0-9--]/g, '');
});

//Limpiar campos decliente
function limpiar()
{
  $("#detalle_correo").html("");
  $("#detalle_telefonos").html("");
  $("#detalle_direccion").html("");
  $("#detalle_rut").html("");

  $("#modal_nombre").val("");
  $("#modal_rut").val("");
  $("#modal_telefono").val("");
  $("#modal_direccion").val("");
  $("#modal_celular").val("");
  $("#modal_correo").val("");
}

//dar formato a la rut

function formatear(par)
{
   if($(par).val().length > 7)
            {
              cadena=$(par).val().split("-").join("");
              corte_1=cadena.substr(0, 8);
              corte_2=cadena.substr(8);  
              $(par).val(corte_1+"-"+corte_2);
            }
            else
            {
              cadena=$(par).val().split("-").join("");
              $(par).val(cadena);
            }
}

//Consultar si in cliente existe o no
  function cliente(id) 
  {
    limpiar();
    if($("#rut").val()=='')
    {
       swal("Ups!", "Debe completar el campo rut.", "info");
      return 0;     
    }
    else if(!(Fn.validaRut(id)))
        {
          swal("Error!", "La RUT no es válida.", "error");
          return 0;    
        }
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
              url: 'buscarcliente',
              type: 'post', 
              data:
              {                
                rut:$("#rut").val(),                
              },
               datatype:"json",  
                success: function(data)  
                {                             
                    seleccionar_facturas($("#rut").val());
                      $.each(JSON.parse(data), function(i, datos) { 
                        if(datos['cantidad']==1)
                        {
                          $("#detalle_correo").html(datos["correo"]);
                          $("#detalle_telefonos").html(datos["celular"]+" / "+ datos["telefono"]);
                          $("#detalle_direccion").html(datos["direccion"]);
                          $("#detalle_rut").html(datos["rut"]);
                        } 
                        else if(datos['cantidad']==0)
                        { 
                          $('#modalCliente').modal('show');
                          $("#modal_rut").val($("#rut").val());
                          $("#modal_nombre").focus();
                        }  
                      });   
                }  
          })
    }
 //Pagar transferencia
  function pagar_transferencia(id)
  {
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
              url: "transferencia",
              type: 'post', 
              data:
              {
                venta:id,
                monto:$("#total_transferencia").val(), 
              },
              success: function(data)  
              {  
                  if(data==1)
                  {
                    swal("Listo!", "Pago realizado con éxito.", "success");
                   
                    $("#total_transferencia").val(""); 
                    $('#modalPagos').modal('hide');
                    $('#id_factura').val("");
                  }
                 
                  else if(data=="error")
                  {
                    swal("Ups!", "Algo ha salido mal, inténtelo de nuevo.", "error");
                  }         
              }  
          })
  } 
 //Pagar efectivo
  function pagar_efectivo(id)
  {
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
              url: "efectivo",
              type: 'post', 
              data:
              {
                venta:id,
                monto:$("#total_efectivo").val(), 
              },
              success: function(data)  
              { 
                
                  if(data==1)
                  {
                    swal("Listo!", "Pago realizado con éxito.", "success");
                   
                    $("#total_efectivo").val(""); 
                    $('#modalPagos').modal('hide');
                    $('#id_factura').val("");
                  }
                 
                  else if(data=="error")
                  {
                    swal("Ups!", "Algo ha salido mal, inténtelo de nuevo.", "error");
                  }         
              }  
          })
  }  
//guardar cliente
//Almacena un cliente en la BD
  function crear_cliente() 
  {
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
              url: $("#ruta").val(),
              type: 'post', 
              data:
              {
                nombre:$("#modal_nombre").val(),
                rut:$("#modal_rut").val(),
                telefono:$("#modal_telefono").val(),
                direccion:$("#modal_direccion").val(),
                celular:$("#modal_celular").val(),
                correo:$("#modal_correo").val(),
              },
              success: function(data)  
              { 
                
                  if(data==1)
                  {
                    swal("Listo!", "Cliente agregado con éxito", "success");
                   
               
                    cliente($("#modal_rut").val());
                    $('#modalCliente').modal('hide');
                     limpiar();

                  }
                 
                  else if(data==0)
                  {
                    swal("Ups!", "Algo ha salido mal, inténtelo de nuevo.", "error");
                  }
                  else
                  {
                    swal("Ups!", data, "info");
                  }           
              }  
          })
  } 
   function seleccionar_facturas(parametro) 
  {
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
           $.ajax({
            url: 'selectfacturas',
            type: 'post',
            data:{rut:parametro},
            datatype:"json",  
            success: function(data)  
            {  
              $("#tabla_factura").html("");
                total_tarjetas=0;
                if(data!="error")
                { 
                  contador=0;
                  $.each(JSON.parse(data), function(i, datos) { 
                    contador++;
                    $("#tabla_factura").append(
                    "<tr id='"+datos['id']+"'>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+contador+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['nombre']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['rut']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['total']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'><a href='#'>Ver</a></td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'><button onClick='set_factura("+datos['id']+")' class='btn btn-xs btn-primary' data-toggle='modal' data-target='#modalPagos'>Abonar</button></td>"+  
                    "</tr>");   
                  }); 

                  if(contador>0)
                  {
                    swal("Atención!", "El cliente tiene "+contador+" facturas.", "info");
                  }
                } 
                else
                { 
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
  }

   function crear_factura() 
  {
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
              url: "facturac",
              type: 'post', 
              data:
              {
                cristales:$("#pro_cristales").val(),
                armazon:$("#pro_armazon").val(),
                codigo:$("#pro_codigo").val(),
                dc:$("#pro_dc").val(),
                cil_derecho:$("#pro_cil_de").val(),
                cil_izquierdo:$("#pro_cil_iz").val(), 
                eje_derecho:$("#pro_eje_de").val(),
                eje_izquierdo:$("#pro_eje_iz").val(),
                esf_derecho:$("#pro_esf_de").val(),
                esf_izquierdo:$("#pro_esf_iz").val(),
                dp:$("#pro_dp").val(), 
                seguro:$("#pro_seguro").val(),
                oftalmologo:$("#pro_oftalmologo").val(),
                observacion:$("#pro_observaciones").val(),
                total:$("#pro_total").val(),
                fecha_entrega:$("#pro_fecha_entrega").val(),
                sucursal:$("#pro_sucursal").val(), 
                h_izquierdo:$("#pro_h_de").val(),
                h_derecho:$("#pro_h_iz").val(),
                otros:$("#pro_otros").val(), 
                rut:$("#rut").val(), 
                producto:$("#pro_producto").val(), 
                
              },
              success: function(data)  
              {  
                if(data==1)
                {
                  swal("Listo!", "Factura almanecenada con éxito.", "success");
                  $(".selectores").prop('selectedIndex', 0);
                  $(".control_input").val("");
                  seleccionar_facturas($("#rut").val());
                }
                else
                {
                  swal("Ups!", data, "info");
                }
              }  
          })
  }
</script>
 
</body>
</html>

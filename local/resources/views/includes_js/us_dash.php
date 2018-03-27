
<script>
$(document).ready(function(){
    listar_tarjetas(); 
    listar_cheques();
    listar_tabla_resumen();
});

//Variables Globales
total_a_pagar=0;

//variables globales para los productos

nombre="";
rut="";
correo_datos_personales="";
direccion="";
telefono="";
celular="";
cristales="";
armazon="";
codigo="";
cil_derecha="";
esf_derecha="";
eje_derecha="";
eje_izquierda="";
cil_izquierda="";
esf_izquierda="";
dp="";
seguro="";
oftalmologo=0;
observacion="";
fecha_entrega="";
sucursal="";
h_izquierdo="";
h_derecho="";
select_otros="";
tipo_producto=""; 
otros="";
function text_mostrar()
{ 

console.log("Nombre: "+nombre);
console.log("Rut: "+rut);
console.log("Correo: "+correo_datos_personales);
console.log("Direccion: "+direccion);
console.log("Telefon: "+telefono);
console.log("Celular: "+celular);

console.log("Cristales: "+cristales);
console.log("Armazon"+armazon);
console.log("Codigo: "+codigo);
console.log("Cilderecha: "+cil_derecha);
console.log("Esfera: "+esf_derecha);
console.log("Ejederecha: "+eje_derecha);
console.log("Eje izquierda: "+eje_izquierda);
console.log("Cil isquierda: "+cil_izquierda);
console.log("Esf_izquierda: "+esf_izquierda);
console.log("dp"+dp);
console.log("Seguro: "+seguro);
console.log("Oftalmolo: "+oftalmologo);
console.log("Observacion: "+observacion);
console.log("fecha_entrega: "+fecha_entrega);
console.log("sucursal: "+sucursal);
console.log("h_izquierdo: "+h_izquierdo);
console.log("h_derecho: "+h_derecho);
console.log("select_otros: "+select_otros);
console.log("tipo_producto: "+tipo_producto);
}

function limpiar_variables()
{ 
cristales="";
armazon="";
codigo="";
cil_derecha="";
esf_derecha="";
eje_derecha="";
eje_izquierda="";
cil_izquierda="";
esf_izquierda="";
dp="";
seguro="";
oftalmologo=0;
observacion="";
fecha_entrega="";
sucursal="";
h_izquierdo=0;
h_derecho=0;
select_otros=""; 
otros=""; 
}
function calcular_total()
{
   
  efectivo=$("#pago_efectivo").val().replace("$ ","");
  transferencia=$("#pago_transferencia").val().replace("$ ","");
  tarjeta=$("#pago_total_tarjeta").val().replace("$ ","");
  cheque=$("#pago_total_cheque").val().replace("$ ","");
 

  efec_sin_coma=parseFloat(efectivo.replace(",",""));
  trans_sin_coma=parseFloat(transferencia.replace(",",""));
  tarj_sin_coma=parseFloat(tarjeta.replace(",",""));
  chec_sin_coma=parseFloat(cheque.replace(",",""));

  console.log(efec_sin_coma);
  console.log(trans_sin_coma);
  console.log(tarj_sin_coma);
  console.log(chec_sin_coma);
  $("#pago_total").val(efec_sin_coma+trans_sin_coma+tarj_sin_coma+chec_sin_coma);

}

function procesar_venta()
{
  if(validar_formularios(1,0))
  {  
   guardar_venta(); 
  }

}
 
function guardar_venta() // guarda la venta
{ 
  parametros={vnombre:nombre,
  vrut:rut,
  vcorreo_datos_personales:correo_datos_personales,
  vdireccion:direccion,
  vtelefono:telefono,
  vcelular:celular,
  vcristales:cristales,
  varmazon:armazon,
  vcodigo:codigo,
  vcil_derecha:cil_derecha,
  vesf_derecha:esf_derecha,
  veje_derecha:eje_derecha,
  veje_izquierda:eje_izquierda,
  vcil_izquierda:cil_izquierda,
  vesf_izquierda:esf_izquierda,
  vdp:dp,
  vseguro:seguro,
  voftalmologo:oftalmologo,
  vobservacion:observacion,
  vfecha_entrega:fecha_entrega,
  vsucursal:sucursal,
  vh_izquierdo:h_izquierdo,
  vh_derecho:h_derecho,
  vselect_otros:select_otros,
  vtipo_producto:tipo_producto, 
  votros:otros,
  vefectivo:$("#pago_efectivo").val(), 
  vtransferencia:$("#pago_transferencia").val()
};
   $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'pventas',
            type: 'post',
            data:parametros, 
            success: function(data)  
            {  
              if(data!="error")
              {
                swal("Listo!", "Factura procesada con éxito", "success");
                $('input').val('');
                $('select').val('');
                $('.select2').val('');
                $('textarea').val('');
                $('[href="#mcliente"]').tab('show');
                $("#tabla_medios_pago").html("");
                listar_tabla_resumen();

              }
              else
              {
                swal("Atención", "Algo ha salido mal, inténtelo de nuevo.", "error");
              }  
            }  
        })
} 
  
 function validar_cheque() //Validar datos de modal cheques
 {
    if($("#c_banco").val()=="")
    {
      swal("Ups!", "Debe Seleccionar un banco.", "info");
    }
    else if($("#c_cuenta").val()=="")
    {
      swal("Ups!", "Debe colocar el número de cuenta.", "info");
    }
     else if($("#c_cheque").val()=="")
    {
      swal("Ups!", "Debe colocar número de cheque", "info");
    }
     else if($("#c_fecha").val()=="")
    {
      swal("Ups!", "Debe agragar una fecha de cobro.", "info");
    } 

    else if($("#c_codigo").val()=="")
    {
      swal("Ups!", "Debe agregar un codigo de referencia.", "info");
    }
    else if($("#c_telefono").val()=="")
    {
      swal("Ups!", "Debe colocar el número de teléfono.", "info");
    }
    else if($("#c_rut").val()=="")
    {
      swal("Ups!", "Debe colocar el número de RUT.", "info");
    }
    else if($("#c_total").val()=="")
    {
      swal("Ups!", "Debe colocar el monto total.", "info");
    }
    else
    { 
      procesar_cheque();
    }
 }

 function validar_tarjeta()//Validar datos de modal tarjetas
 {
    if($("#m_total").val()=="")
    {
      swal("Ups!", "Debe colocar monto total.", "info");
    }
    else if($("#m_tarjeta").val()=="")
    {
      swal("Ups!", "Debe seleccionar una tarjeta.", "info");
    }
     else if($("#m_cuotas").val()=="")
    {
      swal("Ups!", "Debe colocar número de cuota", "info");
    }
     else if($("#m_operacion").val()=="")
    {
      swal("Ups!", "Debe colocar el número de operación.", "info");
    }
    else
    {
    
      procesar_tarjeta();
    }
 }

 function procesar_tarjeta() //Agrega la tarjeta
    {    
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });  
        $.ajax({
            url: 'temptarjetac',
            type: 'post', 
            data:{total:$("#m_total").val(),tarjeta:$("#m_tarjeta").val(),cuotas:$("#m_cuotas").val(),operacion:$("#m_operacion").val()},
            success: function(data)  
            {  
                if(data!="error")
                {

                  swal("Listo!", "Ha sido agregada con éxito su tarjeta", "success");
                  $(".con_modal").val("");
                  $("#tabla_medios_pago").html("");
                  listar_tarjetas();
                  listar_cheques();
                  $("#pago_total").val("");
                } 
                else
                {
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
    } 
 function procesar_cheque() //Agrega el chque
    {     
        banco=$("#c_banco").val();
        cuenta=$("#c_cuenta").val();
        cheque=$("#c_cheque").val();
        fecha=$("#c_fecha").val();
        codigo=$("#c_codigo").val();
        telefono=$("#c_telefono").val();
        rut=$("#c_rut").val();
        total=$("#c_total").val();


        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'tempchequec',
            type: 'post', 
            data:{vbanco:banco,vtotal:total,vcuenta:cuenta,vcheque:cheque,vfecha:fecha,vcodigo:codigo,vtelefono:telefono,vrut:rut,vtotal:total},
            success: function(data)  
            {  
                if(data!="error")
                {
                  swal("Listo!", "Ha sido agregado con éxito su cheque", "success");
                  $(".con_cheque").val("");
                   $("#tabla_medios_pago").html("");
                  listar_tarjetas();
                  listar_cheques();
                  $("#tabla_medios_pago").html("");
                  $("#pago_total").val("");
                } 
                else
                {
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
    } 

function listar_tarjetas() //Listar tarjetas en el modal opciones avanzadas
{ 
   $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'temptarjetas',
            type: 'post',
            datatype:"json",  
            success: function(data)  
            {  

                total_tarjetas=0;
                if(data!="error")
                { 
                  contador=0;
                  $.each(JSON.parse(data), function(i, datos) { 
                    contador++;
                    $("#tabla_medios_pago").append(
                    "<tr id='"+datos['token']+"'>"+
                    "<td>"+contador+"</td>"+ 
                    "<td>Tarjeta - "+datos['tarjeta']+"</td>"+
                    "<td>$ "+datos['total']+"</td>"+  
                    "<td><a id='"+datos['token']+"' href='#' onclick='eliminar_tarjeta(this.id)'><i style=' margin-left: 5px;' class='fa fa-trash'></i></a></td>"+            
                    "</tr>"); 
                    total_tarjetas=total_tarjetas+datos['total'];  
                  });
                  $("#pago_total_tarjeta").val(total_tarjetas);

                } 
                else
                { 
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
}

function listar_tabla_resumen() //Listar tarjetas en el modal opciones avanzadas
{ 
   $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'listart',
            type: 'post',
            datatype:"json",  
            success: function(data)  
            {  
              $("#tabla_detalle").html("");
                contenido="";
                total_tarjetas=0;
                totalpagar=0;
                if(data!="error")
                { 
                  contador=0;
                  $.each(JSON.parse(data), function(i, datos) { 
                    contador++;  
                    totalpagar=parseFloat(datos['efectivo'])+parseFloat(datos['transferencia'])+parseFloat(datos['cheque'])+parseFloat(datos['tarjeta']);
                    contenido=contenido+'<tr>' 
                  +'<td>'+contador+'</td>' 
                  +'<td><input type="checkbox" name=""></td>'
                  +'<td>1891</td> '
                  +'<td>$'+totalpagar+'</td> '
                  +'<td>$'+datos['efectivo']+'</td> '
                  +'<td>$'+datos['tarjeta']+'</td>' 
                  +'<td>$'+datos['cheque']+'</td> '
                  +'<td>$'+datos['transferencia']+'</td> '
                  +'<td>Saldo</td> '
                    +'<td>'
                       +'<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> '
                        +'<i class="fa fa-credit-card"></i>'
                      +'</a>'
                    +'</td>'
                  +'<td>'
                    +'<li class="dropdown"  style="list-style: none;">'
                      +'<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">' 
                       +' <i class="fa fa-print"></i>'
                      +'</a>'
                      +'<ul class="dropdown-menu">'
                       +' <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Interno</a></li>'
                        +'<li role="presentation"><a role="menuitem" tabindex="-1" href="#">OT</a></li>'
                        +'<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cliente</a></li>'
                        +'<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rep</a></li>' 
                      +'</ul>'
                    +'</li>'
                  +'</td> '
                  +'td>'
                    +'<li class="dropdown"  style="list-style: none;">'
                     +' <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">' 
                       +' <i class="fa fa-edit"></i>'
                      +'</a>'
                     +' <ul class="dropdown-menu">'
                       +' <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cliente</a></li>'
                       +' <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Producto</a></li>'
                       +' <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Medio de pago</a></li> '
                      +'</ul>'
                   +' </li>'
                 +' </td> '
                
                +'</tr>';
                  }); 
                  $("#tabla_detalle").append(contenido);
                } 
                else
                { 
                  swal("Ups!", "Algo ha salido mal, no se ha podido cargar la tabla detalle.", "error");
                }           
            }  
        })
}

function eliminar_tarjeta(dato) //Elimina una tarjeta del modal opciones avanzadas.
{
   $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'temptarjetad',
            type: 'post', 
            data:{datos:dato},
            success: function(data)  
            { 
              console.log(data);
                if(data!="error")
                {
                  swal("Listo!", "La tarjeta ha sido retirada con éxito.", "success");
                  $(".con_cheque").val("");
                  $("#"+dato).remove();
                } 
                else
                {
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
}


function listar_cheques() //Listar cheques en el modal opciones avanzadas
{ 
   $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'tempcheques',
            type: 'post',
            datatype:"json",  
            success: function(data)  
            {  
              total_cheque=0;
                if(data!="error")
                { 
                  contador=0;
                  $.each(JSON.parse(data), function(i, datos) { 
                    contador++;
                    $("#tabla_medios_pago").append(
                    "<tr id='"+datos['token']+"'>"+
                    "<td>"+contador+"</td>"+
                    //"<td><strong>"+datos['token']+"</strong></td> "+
                    "<td>Cheque Nº "+datos['n_cheque']+"</td>"+
                    "<td>$ "+datos['total']+"</td>"+  
                    "<td><a id='"+datos['token']+"' href='#' onclick='eliminar_cheques(this.id)'><i style=' margin-left: 5px;' class='fa fa-trash'></i></a></td>"+            
                    "</tr>"); 
                     total_cheque=total_cheque+datos['total'];
                  });
                  $("#pago_total_cheque").val(total_cheque);  
                } 
                else
                { 
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
}
function eliminar_cheques(dato) //Elimina un cheque del modal opciones avanzadas.
{
   $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'tempchequed',
            type: 'post', 
            data:{datos:dato},
            success: function(data)  
            { 
              console.log(data);
                if(data!="error")
                {
                  swal("Listo!", "El cheque ha sido retirado con éxito.", "success");
                  $(".con_cheque").val("");
                  $("#"+dato).remove();
                } 
                else
                {
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
}

function validar_formularios(parametro,paginacion)
{
  //validacion de informacion 
  var datos_cliente=0;
  var datos_productos=0;
  var datos_pagos=0;

  if(parametro==1)
  {

      if($("#nombre").val()=="")
      {

        swal("Ups!", "Debe colocar el nombre del cliente.", "info"); 
      }
      else if($("#correo_datos").val()=="")
      {
         
         swal("Ups!", "Debe colocar el correo del cliente.", "info"); 
      }
      else if($("#direccion").val()=="")
      {
          
         swal("Ups!", "Debe colocar la dirección del cliente.", "info");  
      } 
      else if($("#telefono").val()=="")
      {
         
         swal("Ups!", "Debe colocar el teléfono del cliente.", "info"); 
      }  

      else if($("#rut").val()=="")
      {
         
         swal("Ups!", "Debe colocar el rut del cliente.", "info"); 
      }  

       else if($("#celular").val()=="")
      {
        
         swal("Ups!", "Debe colocar el celular del cliente.", "info"); 
      }  
        
      else
      {
        if(Fn.validaRut($("#rut").val()))
        {datos_cliente=1; 
         if(paginacion==1)
         {
            nombre=$("#nombre").val();
            rut=$("#rut").val();
            correo_datos_personales=$("#correo_datos").val();
            direccion=$("#direccion").val();
            telefono=$("#telefono").val();
            celular=$("#celular").val();

           $('[href="#mproductos"]').tab('show');

         }
        }else
        {
          swal("Error!", "Ra RUT no es válida.", "error"); 
        }
      }   
  }

  if(parametro==2)
  {
    if($("#select_producto").val()=="")
    {
        swal("Ups!", "Debe debe seleccionar un producto.", "info"); 
    }
    else
    {
        //Validacion para lentes de cerca
        if($("#select_producto").val()=="lentes_cerca")
        {

          if($("#len_cer_observacion").val()=="")
          {
            swal("Ups!", "Debe colocar una observacion.", "info"); 
          }

          else if($("#len_cer_sucursal").val()=="")
          {
            swal("Ups!", "Debe seleccionar una sucursal.", "info"); 
          }

          else if($("#len_cer_fecha_entrega").val()=="")
          {
            swal("Ups!", "Debe colocar una fecha de entrega.", "info"); 
          }

           else if($("#len_cer_oftalmologo").val()=="")
          {
            swal("Ups!", "Debe seleccionar un oftalmólogo.", "info"); 
          }

          else if($("#len_cer_seguro").val()=="")
          {
            swal("Ups!", "Debe seleccionar el seguro.", "info"); 
          }

          else if($("#len_cer_dp").val()=="")
          {
            swal("Ups!", "Debe seleccionar el DP.", "info"); 
          }

          else if($("#len_cer_eje_izquierdo").val()=="")
          {
            swal("Ups!", "Debe debe seleccionar el eje izquierdo.", "info"); 
          }
         

          else if($("#len_cer_esf_izquierdo").val()=="")
          {
            swal("Ups!", "Debe debe seleccionar la esfera izquierda.", "info"); 
          }

          else if($("#len_cer_cil_izquierdo").val()=="")
          {
            swal("Ups!", "Debe seleccionar el cilindro izquierdo.", "info"); 
          }
         
          else if($("#len_cer_eje_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar el eje derecho.", "info"); 
          }

          else if($("#len_cer_esf_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar la esfera derecha.", "info"); 
          }


          else if($("#len_cer_cil_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar el cilindro derecho.", "info"); 
          }


          else if($("#len_cer_codigo").val()=="")
          {
            swal("Ups!", "Debe completar el campo código.", "info"); 
          }

           else if($("#len_cer_armazon").val()=="")
          {
            swal("Ups!", "Debe seleccionar una armazon.", "info"); 
          }

          else if($("#len_cer_cristales").val()=="")
          {
            swal("Ups!", "Debe completar el campo cristal.", "info"); 
          } 
            else
          {
            
            $('[href="#mpagos"]').tab('show');
              limpiar_variables();
              observacion=$("#len_cer_observacion").val();
              sucursal=$("#len_cer_sucursal").val();
              fecha_entrega=$("#len_cer_fecha_entrega").val();
              oftalmologo=$("#len_cer_oftalmologo").val();;
              seguro=$("#len_cer_seguro").val();
              dp=$("#len_cer_dp").val();
              eje_izquierda=$("#len_cer_eje_izquierdo").val();
              esf_izquierda=$("#len_cer_esf_izquierdo").val();
              cil_izquierda=$("#len_cer_cil_izquierdo").val();              
              eje_derecha=$("#len_cer_eje_derecho").val();
              esf_derecha=$("#len_cer_esf_derecho").val();
              cil_derecha=$("#len_cer_cil_derecho").val();
              codigo=$("#len_cer_codigo").val();
              armazon=$("#len_cer_armazon").val();
              cristales=$("#len_cer_cristales").val();  
              tipo_producto="Lentes de cerca"; 
          } 
        }
      
        
        if($("#select_producto").val()=="lentes_lejos")
        {
           
           if($("#len_lej_cristales").val()=="")
          {
            swal("Ups!", "Debe completar el campo cristal.", "info"); 
          } 

           else if($("#len_lej_armazon").val()=="")
          {
            swal("Ups!", "Debe seleccionar una armazon.", "info"); 
          }
          
          else if($("#len_lej_codigo").val()=="")
          {
            swal("Ups!", "Debe completar el campo código.", "info"); 
          }
          
          else if($("#len_lej_cil_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar el cilindro derecho.", "info"); 
          }
          else if($("#len_lej_esf_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar la esfera derecha.", "info"); 
          }

          else if($("#len_lej_eje_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar el eje derecho.", "info"); 
          }
 
          else if($("#len_lej_cil_izquierdo").val()=="")
          {
            swal("Ups!", "Debe seleccionar el cilindro izquierdo.", "info"); 
          }

           else if($("#len_lej_esf_izquierdo").val()=="")
          {
            swal("Ups!", "Debe debe seleccionar la esfera izquierda.", "info"); 
          }
          
          else if($("#len_lej_eje_izquierdo").val()=="")
          {
            swal("Ups!", "Debe debe seleccionar el eje izquierdo.", "info"); 
          }

           else if($("#len_lej_dp").val()=="")
          {
            swal("Ups!", "Debe seleccionar el DP.", "info"); 
          }

           else if($("#len_lej_seguro").val()=="")
          {
            swal("Ups!", "Debe seleccionar el seguro.", "info"); 
          }

          else if($("#len_lej_h_derecha").val()=="")
          {
            swal("Ups!", "Debe completar el H derecho.", "info"); 
          } 
          
          else if($("#len_lej_h_izquierda").val()=="")
          {
            swal("Ups!", "Debe completar el H izuiqerdo.", "info"); 
          } 
           else if($("#len_lej_oftalmologo").val()=="")
          {
            swal("Ups!", "Debe seleccionar un oftalmólogo.", "info"); 
          }

           else if($("#len_lej_fecha").val()=="")
          {
            swal("Ups!", "Debe colocar una fecha de entrega.", "info"); 
          }
         
          else if($("#len_lej_sucursal").val()=="")
          {
            swal("Ups!", "Debe seleccionar una sucursal.", "info"); 
          }

          else if($("#len_lej_observaciones").val()=="")
          {
            swal("Ups!", "Debe colocar una observacion.", "info"); 
          } 
            else
          {
            
            $('[href="#mpagos"]').tab('show');
              limpiar_variables();
              observacion=$("#len_lej_observaciones").val();
              sucursal=$("#len_lej_sucursal").val();
              fecha_entrega=$("#len_lej_fecha").val();
              oftalmologo=$("#len_lej_oftalmologo").val();;
              seguro=$("#len_lej_seguro").val();
              dp=$("#len_lej_dp").val();
              eje_izquierda=$("#len_lej_eje_izquierdo").val();
              esf_izquierda=$("#len_lej_esf_izquierdo").val();
              cil_izquierda=$("#len_lej_cil_izquierdo").val();              
              eje_derecha=$("#len_lej_eje_derecho").val();
              esf_derecha=$("#len_lej_esf_derecho").val();
              cil_derecha=$("#len_lej_cil_derecho").val();
              codigo=$("#len_lej_codigo").val();
              armazon=$("#len_lej_armazon").val();
              cristales=$("#len_lej_cristales").val();

              h_derecho=$("#len_lej_h_derecha").val();
              h_izquierdo=$("#len_lej_h_izquierda").val();   
              tipo_producto="Lentes de lejos"; 
          } 
        }
        else if($("#select_producto").val()=="lentes_tarspaso")
        {


          if($("#len_tras_armazon").val()=="")
          {
            swal("Ups!", "Debe seleccionar una armazon.", "info"); 
          }
          
          else if($("#len_tras_codigo").val()=="")
          {
            swal("Ups!", "Debe completar el campo código.", "info"); 
          } 
           else if($("#len_tras_dp").val()=="")
          {
            swal("Ups!", "Debe seleccionar el DP.", "info"); 
          } 

          else if($("#len_tras_h_derecha").val()=="")
          {
            swal("Ups!", "Debe completar el H derecho.", "info"); 
          } 
          
          else if($("#len_tras_h_izquierda").val()=="")
          {
            swal("Ups!", "Debe completar el H izuiqerdo.", "info"); 
          } 
           else if($("#len_tras_oftalmologo").val()=="")
          {
            swal("Ups!", "Debe seleccionar un oftalmólogo.", "info"); 
          }

          else if($("#len_tras_fecha").val()=="")
          {
            swal("Ups!", "Debe colocar una fecha de entrega.", "info"); 
          }
         
          else if($("#len_tras_sucursal").val()=="")
          {
            swal("Ups!", "Debe seleccionar una sucursal.", "info"); 
          }

          else if($("#len_tras_observaciones").val()=="")
          {
            swal("Ups!", "Debe colocar una observacion.", "info"); 
          } 
            else
          {
            
            $('[href="#mpagos"]').tab('show');
              limpiar_variables();
              observacion=$("#len_tras_observaciones").val();
              sucursal=$("#len_tras_sucursal").val();
              fecha_entrega=$("#len_tras_fecha").val();
              oftalmologo=$("#len_tras_oftalmologo").val();             
              dp=$("#len_tras_dp").val(); 
              codigo=$("#len_tras_codigo").val();
              armazon=$("#len_tras_armazon").val();              
              h_derecho=$("#len_tras_h_derecha").val();
              h_izquierdo=$("#len_tras_h_izquierda").val(); 
              tipo_producto="Traspaso"; 

          } 
        }
        else if($("#select_producto").val()=="lentes_contacto")
        { 
         
         if($("#len_contac_esf_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar la esfera derecha.", "info"); 
          }

          else if($("#len_contac_eje_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar el eje derecho.", "info"); 
          }
 
          else if($("#len_contac_cil_izquierdo").val()=="")
          {
            swal("Ups!", "Debe seleccionar el cilindro izquierdo.", "info"); 
          }

           else if($("#len_contac_esf_izquierdo").val()=="")
          {
            swal("Ups!", "Debe debe seleccionar la esfera izquierda.", "info"); 
          }
          
          else if($("#len_contac_eje_izquierdo").val()=="")
          {
            swal("Ups!", "Debe debe seleccionar el eje izquierdo.", "info"); 
          }
          else if($("#len_contac_cil_derecho").val()=="")
          {
            swal("Ups!", "Debe seleccionar el cilindro derecho.", "info"); 
          }
           else if($("#len_contac_dp").val()=="")
          {
            swal("Ups!", "Debe seleccionar el DP.", "info"); 
          }

           else if($("#len_contac_seguro").val()=="")
          {
            swal("Ups!", "Debe seleccionar el seguro.", "info"); 
          }

          
           else if($("#len_contac_oftalmologo").val()=="")
          {
            swal("Ups!", "Debe seleccionar un oftalmólogo.", "info"); 
          }

           else if($("#len_contac_fecha").val()=="")
          {
            swal("Ups!", "Debe colocar una fecha de entrega.", "info"); 
          }
         
          else if($("#len_contac_sucursal").val()=="")
          {
            swal("Ups!", "Debe seleccionar una sucursal.", "info"); 
          }

          else if($("#len_contac_observaciones").val()=="")
          {
            swal("Ups!", "Debe colocar una observacion.", "info"); 
          } 
            else
          { 
            $('[href="#mpagos"]').tab('show');
              limpiar_variables();
              eje_izquierda=$("#len_contac_eje_izquierdo").val();
              esf_izquierda=$("#len_contac_esf_izquierdo").val();
              cil_izquierda=$("#len_contac_cil_izquierdo").val();              
              eje_derecha=$("#len_contac_eje_derecho").val();
              esf_derecha=$("#len_contac_esf_derecho").val();
              cil_derecha=$("#len_contac_cil_derecho").val();
              observacion=$("#len_contac_observaciones").val(); 
              sucursal=$("#len_contac_sucursal").val();
              fecha_entrega=$("#len_contac_fecha").val();
              oftalmologo=$("#len_contac_oftalmologo").val();;
              seguro=$("#len_contac_seguro").val();
              dp=$("#len_contac_dp").val(); 
              tipo_producto="Lente de contacto"; 
          } 
        }
        else if($("#select_producto").val()=="lentes_sol")
        {

         if($("#len_sol_armazon").val()=="")
          {
            swal("Ups!", "Debe seleccionar una armazon.", "info"); 
          }
          
          else if($("#len_sol_codigo").val()=="")
          {
            swal("Ups!", "Debe completar el campo código.", "info"); 
          }
           
          else if($("#len_sol_observaciones").val()=="")
          {
            swal("Ups!", "Debe colocar una observacion.", "info"); 
          } 
            else
          {
            
            $('[href="#mpagos"]').tab('show');
              limpiar_variables();
              observacion=$("#len_sol_observaciones").val(); 
              codigo=$("#len_sol_codigo").val();
              armazon=$("#len_sol_armazon").val();
              tipo_producto="Lentes de Sol"; 
          } 
        }
        else if($("#select_producto").val()=="otros_lentes_selector")
        {
         if($("#len_otros_ajuste").val()=="")
          {
            swal("Ups!", "Debe seleccionar un ajuste.", "info"); 
          }
          
          else if($("#len_otros_observaciones").val()=="")
          {
            swal("Ups!", "Debe completar colocar alguna observación.", "info"); 
          } 
            else
          { 
            $('[href="#mpagos"]').tab('show');
            limpiar_variables();
            otros=$("#len_otros_ajuste").val();
            tipo_producto="Otros";            
            observacion=$("#len_otros_observaciones").val();
          } 
        }
    }
     
  }

  //Retornos
  if(parametro==1)
  {
    if(datos_cliente==1)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  else if(datos_productos==1)
  {
     if(datos_productos==1)
      {
        return 1;
      }
      else
      {
        return 0;
      }
  }
  else if(datos_pagos==1)
  {
     if(datos_pagos==1)
      {
        return 1;
      }
      else
      {
        return 0;
      }
  }
text_mostrar();
}

function paginar_producto(id)
{
  $(".control_producto").hide();
  $("#"+id).show();
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
 
 //Setea en formato de moneda
  $(function() {
    $('.money').maskMoney({prefix: '$ '});
  })

//Select con buscador
  $(".select2").select2();

    $('.datapicker').datepicker({
      autoclose: true
    });

//Tipo numerico en los input
    $(".numeric").numeric(); 

//Formatear RUT
    function set_rut() //colocar el guion en el input rut
    {
      console.log($("#rut").val().length);
      if($("#rut").val().length == 8)
      {
        $("#rut").val($("#rut").val() + "-")
      }
    }

//Validar correos
$('.correo').change(function (e) {
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var EmailId = this.value;
    if (emailRegex.test(EmailId))
        this.style.color = "";
    else
        this.style.color = "red";
});
</script>
 
 
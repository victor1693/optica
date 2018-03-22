
<script>
//variables globales para los productos


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
oftalmologo="";
observacion="";
fecha_entrega="";
sucursal="";
h_izquierdo="";
h_derecho="";
select_otros="";
tipo_producto=""; 

function text_mostrar()
{ 
  console.log("Mostrando:");
  console.log("Cristales: "+cristales);
  console.log("armazon: "+armazon);
  console.log("codigo: "+codigo);
  console.log("cil_derecha: "+cil_derecha);
  console.log("esf_derecha: "+esf_derecha);
  console.log("eje_derecha: "+eje_derecha);
  console.log("eje_izquierda: "+eje_izquierda);
  console.log("cil_izquierda: "+cil_izquierda);

  console.log("esf_izquierda: "+esf_izquierda);
  console.log("dp: "+dp);
  console.log("seguro: "+seguro);
  console.log("oftalmologo: "+oftalmologo);
  console.log("observacion: "+observacion);
  console.log("fecha_entrega: "+fecha_entrega);
  console.log("sucursal: "+sucursal);
  console.log("h_izquierdo: "+h_izquierdo);
  console.log("select_otros: "+select_otros); 
  console.log("tipo_producto: "+tipo_producto);  

}


function procesar_venta()
{
  if(validar_formularios(1,0))
  {
    alert("Se puede procesar");
  } 

}

 function validar_cheque()//Validar datos de modal cheques
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

 function procesar_tarjeta()
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
                } 
                else
                {
                  swal("Ups!", "Algo ha salido mal, inténtelo denuevo. Verifíque los campos.", "error");
                }           
            }  
        })
    } 
 function procesar_cheque()
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
                } 
                else
                {
                  swal("Ups!", "Algo ha salido mal, inténtelo denuevo. Verifíque los campos.", "error");
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

          else if($("#lentest_cer_fecha_entrega").val()=="")
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
            alert("Entro");
            $('[href="#mpagos"]').tab('show');
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
            alert("Entro");
            $('[href="#mpagos"]').tab('show');
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
            alert("Entro");
            $('[href="#mpagos"]').tab('show');
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
            alert("Entro");
            $('[href="#mpagos"]').tab('show');
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
            alert("Entro");
            $('[href="#mpagos"]').tab('show');
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
            alert("Entro");
            $('[href="#mpagos"]').tab('show');
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
 
 
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
       Clientes
      </h1> 
    </section> 
    <!-- Main content -->
    <section class="content">  
      <div class="row">
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">  
              <li><a href="#mproductos active" data-toggle="tab"><strong></strong></a></li> 
              <li class="pull-left header"><i class="fa fa-th"></i>Clientes</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
              <div class="tab-pane row active" id="mproductos"> 
                   <div class="col-sm-6">
                   <input id="ruta" type="hidden" value="clientec" name="">
                     <div class="col-sm-6" style="padding: 0px;">
                        <label>Nombre</label>
                        <input id="nombre" class="form-control col-sm-" type="text" name="nombre">
                     </div>
                      
                     <div class="col-sm-6" style="padding: 0px;">
                       <label>RUT</label>
                        <input data-mask="000" onkeyup="" id="rut" class="form-control" type="text" name="rut" maxlength="10">
                     </div>

                      <div class="col-sm-6" style="padding: 0px;">
                        <label>Correo</label>
                        <input   id="correo_datos" class="form-control " type="text" name="correo">
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
                     <button onclick="registrar()" id="boton_modo" class="btn btn-xs btn-danger" style="display: none; margin-top: 5px;margin-bottom: 5px;">Modo registro</button>
                      <div class="col-sm-12" style="padding: 0px;padding-top: 10px;margin-bottom:10px;">
                        <button id="boton_procesar" onclick="crear_cliente()" class="btn btn-primary form-control">Registrar</button>
                     </div> 
                   </div>

                   <div class="col-xsm-6 text-center">
                     <img src="local/resources/views/img/man.png" style="width: 220px;">
                   </div>
              </div> 
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div> 

      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">  
              <li><a href="#mproductos active" data-toggle="tab"><strong></strong></a></li> 
              <li class="pull-left header"><i class="fa fa-th"></i>Todos los clientes</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
              <div class="tab-pane row active" id=""> 
                    <table class="table table-condenced table-hover table-bordered">
                      <thead>
                        <th>#</th>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Teléfonos</th>
                        <th>Editar</th>
                      </thead>
                      <tbody id="tabla_clientes">
                        
                      </tbody>
                    </table>
              </div> 
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div> 
    </section>
    <!-- /.content -->
  </div>
 
 
<?php include('local/resources/views/includes/referencias_down.php');?> 
<!--Referencias JS-->
<script type="text/javascript">
$( document ).ready(function() {
    listar_clientes();
});

function editar()
{
  $('#rut').prop("disabled", true);
  $('#nombre').prop("disabled", true);
  $('#ruta').val("clienteup");
  $("#boton_procesar").text('Editar');
  $("#boton_modo").show();
}

function registrar()
{
  $('#rut').prop("disabled", false);
  $('#nombre').prop("disabled", false);
  $('#ruta').val("clientec");
  $("#boton_procesar").text('Registrar');
  $("#boton_modo").hide();
  linpiar_formulario();
}

function linpiar_formulario()
{
    $("#nombre").val("");
    $("#rut").val("");
    $("#telefono").val("");
    $("#direccion").val("");
    $("#celular").val("");
    $("#correo_datos").val("");
}

//seleciona un cliente
  function cliente(id,id2) 
  {
    
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
              url: 'clienteunico',
              type: 'post', 
              data:
              {                
                rut:id+'-'+id2,                
              },
               datatype:"json",  
                success: function(data)  
                {                             
                    if(data!="0")
                    { 
                      contador=0;
                      $.each(JSON.parse(data), function(i, datos) { 
                          $("#nombre").val(datos['nombre']);
                          $("#rut").val(datos['rut']);
                          $("#telefono").val(datos['telefono']);
                          $("#direccion").val(datos['direccion']);
                          $("#celular").val(datos['celular']);
                          $("#correo_datos").val(datos['correo']);
                      }); 
                    } 
                    else if(data==5)
                    { 
                      swal("Ups!", "Debe completar el campo rut.", "info");
                    } 
                    else if(data==0)
                    { 
                      swal("Ups!", "Algo ha salido mal, no se pudieron cargar los clientes.", "error");
                    }           
                }  
          })
  }

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
                nombre:$("#nombre").val(),
                rut:$("#rut").val(),
                telefono:$("#telefono").val(),
                direccion:$("#direccion").val(),
                celular:$("#celular").val(),
                correo:$("#correo_datos").val(),
              },
              success: function(data)  
              { 
                
                  if(data==1)
                  {
                    swal("Listo!", "Cliente agregado con éxito", "success");
                    listar_clientes();
                    linpiar_formulario();
                    registrar()                  
                  }
                  else if(data==2)
                  {
                    swal("Listo!", "Cliente actualizado con éxito", "success");
                    listar_clientes();
                    linpiar_formulario();
                    registrar()  

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
  //Listar los clientes en la tabla de clientes
  function listar_clientes() //Listar tarjetas en el modal opciones avanzadas
{ 
  
   $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
            url: 'clientess',
            type: 'post',
            datatype:"json",  
            success: function(data)  
            {  
              $("#tabla_clientes").html("");           
                if(data!="error")
                { 
                  contador=0;
                  $.each(JSON.parse(data), function(i, datos) { 
                    contador++;
                    var cadena1 = datos['rut'];                     
                    $("#tabla_clientes").append(
                    "<tr id='"+datos['id']+"'>"+
                    "<td>"+contador+"</td>"+ 
                    "<td>"+datos['rut']+"</td>"+
                    "<td>"+datos['nombre']+"</td>"+ 
                     "<td>"+datos['correo']+"</td>"+
                    "<td>"+datos['direccion']+"</td>"+  
                     "<td>"+datos['telefono']+" / "+datos['celular']+"</td>"+
                    "<td><button onClick='cliente("+cadena1.split('-')[0]+","+cadena1.split('-')[1]+"),editar()' class='btn btn-xs btn-primary'>Editar</button></td>"+                         
                    "</tr>");   
                  }); 
                } 
                else
                { 
                  swal("Ups!", "Algo ha salido mal, no se pudieron cargar los clientes.", "error");
                }           
            }  
        })
}

</script>

</body>
</html>

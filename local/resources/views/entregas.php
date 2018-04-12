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
       Entregas
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
                        <h4 class="box-title">RUT del cliente</h4>
                      </div> 
                    </div> 

                    <div class="col-sm-12 text-center" style="padding: 0px;margin-bottom: 5px;">  
                        <input style="max-width: 250px;margin: 0 auto;" class="form-control" type="text" id="buscador" placeholder="12345678-9"> 
                        <button onClick='listar_entregas($("#buscador").val())'  style="max-width: 150px;margin-top: 15px;" class=" btn btn-danger btn-sm">Buscar por RUT</button>  
                        <button onClick='listar_entregas("")'  style="max-width: 150px;margin-left: 15px;margin-top: 15px;" class=" btn btn-primary btn-sm">Mostrar todo</button>
                    </div>  
              </div> 
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div> 


      <!--tabla de detalle-->
      <div class="col-md-12">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right"> 
               
              <li><a href="#mproductos active" data-toggle="tab"><strong></strong></a></li>
              
              <li class="pull-left header"><i class="fa fa-th"></i>Detalle de entregas</li>
            </ul>
            <div class="tab-content "> 
              <!--Tab productos-->
                <div class="row">
                  <table class="table table condenced">
                    <thead>
                      <th>#</th>
                      <th>Cliente</th>
                      <th>RUT</th>
                      <th>Producto</th>
                      <th>Monto</th>
                      <th>Abonado</th>
                      <th>Restante</th>
                      <th>Estatus</th> 
                      <th>Entregar</th>

                    </thead>
                    <tbody id="tabla_entregas">
                      
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
<div class="control-sidebar-bg"></div>
</div>
<?php include('local/resources/views/includes/referencias_down.php');?>
<script type="text/javascript">

$( document ).ready(function() {
    listar_entregas($("#buscador").val());
});
   function listar_entregas(parametro) 
  {
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
           $.ajax({
            url: 'listarentregas',
            type: 'post',
            data:{rut:parametro},
            datatype:"json",  
            success: function(data)  
            {  
              $("#tabla_entregas").html("");
                total_tarjetas=0;
                if(data!="error")
                { 
                  contador=0;
                  $.each(JSON.parse(data), function(i, datos) { 
                    contador++;
                    var estatus = "";
                    var btn_entrega="";
                    if(datos['estatus']==0)
                    {
                      estatus="<span style='color: #af0017;'><strong>No entregado</strong></span>";
                      btn_entrega="<button onClick='engregar("+datos['id']+")' class='btn btn-xs btn-primary'>Entregar</button>";
                    }
                    else
                    {
                      estatus="<span style='color: #008e07;'><strong>Entregado</strong></span>"; 
                    }
                    $("#tabla_entregas").append(
                    "<tr id='"+datos['id']+"'>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+contador+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['nombre']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['rut']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['tipo_producto']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['total']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+datos['monto_abonado']+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+(datos['total'] - datos['monto_abonado'])+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+estatus+"</td>"+
                    "<td style='padding-top=0;padding-bottom:0;height:25px;'>"+btn_entrega+"</td>");   
                  });  
                } 
                else
                { 
                  swal("Ups!", "Algo ha salido mal, inténtelo de nuevo. Verifíque los campos.", "error");
                }           
            }  
        })
  }

  function engregar(id) 
  {
     $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
              url: "entregarpro",
              type: 'post', 
              data:
              {
                id:id,               
              },
              success: function(data)  
              { 
                
                  if(data==1)
                  {
                    swal("Listo!", "Producto entregado con éxito", "success");
                    listar_entregas($("#buscador").val());  
                  }
                  else if(data=="0")
                  {
                    swal("Atención!", "Debe seleccionar una factura para entregar.", "info"); 
                  } 
                  else 
                  {
                    swal("Ups!", "Algo ha salido mal, inténtelo de nuevo.", "error");
                  }      
              }  
          })
  } 
</script>

</body>
</html>

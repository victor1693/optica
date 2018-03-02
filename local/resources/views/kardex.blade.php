<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    Óptica Hebreo
                </title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                    <!-- Bootstrap 3.3.7 -->
                    <?php include('local/resources/views/includes/referencias_top.html');?>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php include('local/resources/views/includes/header_dash.php');?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('local/resources/views/includes/aside_dash.php');?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Auditar sistema
                    </h1>
                </section>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                </section>
                <!-- Main content -->
                <section class="content">
                      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reporte de actividades</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Usuario</th>
                  <th>Tipo usuario</th>
                  <th>Detalle</th>
                  <th>Fecha</th> 
                  <th>Tipo</th>
                </tr>
                <?php
                $contador=0; 
                foreach ($kardex as $key) {
                $contador++;
                   echo' <tr>
                  <td>'.$contador.'.</td>
                  <td>'.$key->nombre.'</td>
                  <td>'.$key->privilegio.'</td>
                  <td>'.$key->descripcion.'</td>
                  <td>'.$key->tmp.'</td>
                  <td><span>'.$key->descrip.'</span></td>
                </tr> ';
                } ?>
               
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php //include('includes/footer.php');?>
            <div class="control-sidebar-bg">
            </div>
        </div>
         <div id="ohsnap"></div>
        </div>
          <?php include('local/resources/views/includes/referencias_down.php');?>
          <script type="text/javascript">
            function enviar()
            {
                if($("#correo").val()==""){ohSnap('Debe colorcar su correo.', {color: 'orange '});$('#correo').focus();}
                else if($("#clave").val()==""){ohSnap('Debe colorcar su clave.', {color: 'orange '});$('#clave').focus();} 
                else
                {
                    $("#formulario").submit();
                }
            }
        </script>
        <?php
          if(isset($_GET["info"]))
          {
             if($_GET["info"]=="correo") {echo "<script>ohSnap('Debe colorcar su correo.', {color: 'orange '});$('#correo').focus();</script>";}   
             if($_GET["info"]=="clave") {echo "<script>ohSnap('Debe colorcar su clave.', {color: 'orange '});$('#clave').focus();</script>";} 
             if($_GET["info"]=="up_user") {echo '<script>swal("Atención!", "Datos actualizados con éxito.", "success");
                 </script>';} 
          } 

         ?>
      
    </body>
</html>

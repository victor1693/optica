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
                        Configuración
                    </h1>
                </section>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="col-sm-12">
                        <a aria-expanded="true" class="btn btn-app pull-right" data-toggle="tab" href="#tab_2" style="margin: 0px;margin-bottom: 10px;">
                            <i class="fa fa-plus-circle">
                            </i>
                            Seguridad
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs" style="display: none;">
                                <li class="">
                                    <a aria-expanded="true" data-toggle="tab" href="#tab_2">
                                        Nuevo
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" style="padding: 0px;">
                                <!-- /.tab-pane -->
                                <div class="tab-pane active" id="tab_2">
                                    <div class="box" style="padding-bottom: 15px;">
                                        <!-- /.box-header -->
                                        <div class="box-header">
                                            <h3 class="box-title">
                                                Seguridad
                                            </h3>
                                        </div>
                                        <div class="box-body no-padding">
                                            <div class="col-sm-6 text-center">
                                                <img src="local/resources/views/iconos/settings-4.png" style="width: 200px;">
                                                </img>
                                            </div>
                                            <div class="col-sm-6">
                                                <form action="clave" id="formulario" method="post">
                                                    <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>">
                                                        <div class="form-group has-feedback">
                                                            <label>
                                                                Correo:
                                                            </label>
                                                            <input class="form-control" id="correo" name="email" placeholder="Correo" type="email">
                                                            </input>
                                                        </div>
                                                        <label>
                                                            Clave:
                                                        </label>
                                                        <div class="form-group has-feedback">
                                                            <input class="form-control" id="clave" name="pass" placeholder="Clave" type="password">
                                                            </input>
                                                        </div>
                                                        <div class="row">
                                                            <!-- /.col -->
                                                            <div class="col-xs-12 text-center"> 
                                                                <a onClick="enviar()" class="btn btn-primary btn-block btn-flat" id="btn_entrar">
                                                                    Actualizar
                                                                </a> 
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                    </input>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
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

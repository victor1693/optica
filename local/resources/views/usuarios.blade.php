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
                        Usuarios
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
                            Nuevo
                        </a>
                        <a aria-expanded="true" class="btn btn-app pull-right" data-toggle="tab" href="#tab_1" style="margin: 0px;margin-bottom: 10px;">
                            <i class="fa fa-users">
                            </i>
                            Usuarios
                        </a>
                    </div>
                    <div class="col-sm-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs" style="display: none;">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#tab_1">
                                        Gestión
                                    </a>
                                </li>
                                <li class="">
                                    <a aria-expanded="true" data-toggle="tab" href="#tab_2">
                                        Nuevo
                                    </a>
                                </li>
                                <li class="pull-right">
                                    <a class="text-muted" href="#">
                                        <i class="fa fa-user">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" style="padding: 0px;">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-header">
                                            <h3 class="box-title">
                                                Administración de usuarios
                                            </h3>
                                        </div>
                                        <div class="box-body no-padding">
                                            <table class="table table-condensed">
                                                <tbody>
                                               
                                                    <tr>
                                                        <th style="width: 10px">
                                                            #
                                                        </th>
                                                        <th>
                                                            Nombre
                                                        </th>
                                                        <th>
                                                            Correo
                                                        </th>
                                                        <th>
                                                            Usuario
                                                        </th>
                                                        <th>
                                                            Privilegio
                                                        </th>
                                                         <th>
                                                            Estado
                                                        </th>
                                                        <th>
                                                            Acción
                                                        </th>
                                                    </tr>
                                                    <?php 
                                                    $contador=0;
                                                    foreach ($datos as $key ) {
                                                        $estado="Regular";
                                                        $accion='<li role="presentation">
                                                                        <a href="suspender/ '.$key->id.' " role="menuitem" tabindex="-1">
                                                                            Bloquear
                                                                        </a>
                                                                    </li>';
                                                        if($key->suspendido)
                                                        {
                                                            $estado="Suspendido";
                                                            $accion='<li role="presentation">
                                                                        <a href="activar/ '.$key->id.' " role="menuitem" tabindex="-1">
                                                                            Activar
                                                                        </a>
                                                                    </li>';
                                                        }
                                                        $contador++;
                                                $accion=' <li class="dropdown" style="list-style: none;">
                                                                <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-gear">
                                                                    </i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li role="presentation">
                                                                        <a href="#" role="menuitem" tabindex="-1">
                                                                            Editar
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a href="#" role="menuitem" tabindex="-1">
                                                                            Eliminar
                                                                        </a>
                                                                    </li>
                                                                    <li role="presentation">
                                                                        <a href="#" role="menuitem" tabindex="-1">
                                                                            Reenviar clave
                                                                        </a>
                                                                    </li>
                                                                    '.$accion.'
                                                                </ul>
                                                            </li> ';
echo"<tr><td>".$contador."</td><td>".$key->nombre."</td><td>".$key->correo."</td><td>".$key->usuario."</td><td>Nivel-".$key->privilegio."</td><td>".$estado."</td><td>".$accion."</td></tr>";
                                                    }?>
                                                     
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                    <div class="box" style="padding-bottom: 15px;">
                                        <!-- /.box-header -->
                                        <div class="box-header">
                                            <h3 class="box-title">
                                                Nuevo usuario
                                            </h3>
                                        </div>
                                        <div class="box-body no-padding">
                                            <div class="col-sm-6 text-center">
                                                <img src="local/resources/views/iconos/id-card.png" style="width: 200px;">
                                                </img>
                                            </div>
                                            <div class="col-sm-6">
                                                <form action="regusuario" id="formulario" method="post">
                                                    <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>">
                                                        <div class="form-group has-feedback">
                                                            <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text">
                                                            </input>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <input class="form-control" id="usuario" name="usuario" placeholder="Usuario" type="text">
                                                            </input>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <input autocomplete="false" class="form-control" id="correo" name="correo" placeholder="Correo" type="email">
                                                            </input>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <input class="form-control" id="clave" name="clave" placeholder="Clave" type="password">
                                                            </input>
                                                        </div>
                                                        <div class="row">
                                                            <!-- /.col -->
                                                            <div class="col-xs-12 text-center">
                                                                 <a onClick="enviar()"  class="btn btn-primary btn-block btn-flat" id="btn_entrar">
                                                                    Registrar
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
                if($("#nombre").val()==""){ohSnap('Debe colorcar su nombre.', {color: 'orange '});$('#nombre').focus();}
                else if($("#usuario").val()==""){ohSnap('Debe colorcar su usuario.', {color: 'orange '});$('#usuario').focus();}
                else if($("#correo").val()==""){ohSnap('Debe colorcar su correo.', {color: 'orange '});$('#correo').focus();}
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
             if($_GET["info"]=="nombre") {echo "<script>ohSnap('Debe colorcar su nombre.', {color: 'orange '});$('#nombre').focus();</script>";}   
             if($_GET["info"]=="correo") {echo "<script>ohSnap('Debe colorcar su correo.', {color: 'orange '});$('#correo').focus();</script>";}
             if($_GET["info"]=="usuario") {echo "<script>ohSnap('Debe colorcar su usuario.', {color: 'orange '});$('#usuario').focus();</script>";}
             if($_GET["info"]=="clave") {echo "<script>ohSnap('Debe colorcar su clave.', {color: 'orange '});$('#clave').focus();</script>";}  
             if($_GET["info"]=="require_usuario") {echo "<script>ohSnap('El usuario ya esta registrado.', {color: 'orange '});$('#usuario').focus();</script>";}
             if($_GET["info"]=="require_email") {echo "<script>ohSnap('El correo ya esta registrado.', {color: 'orange '}); </script>";} 
             if($_GET["info"]=="suspend_usuario") {echo "<script>ohSnap('El usuario ha sido activado.', {color: 'orange '}); </script>";}
             if($_GET["info"]=="active_usuario") {echo "<script>ohSnap('El usuario ha sido bloqueado.', {color: 'orange '}); </script>";}    

          } 

          if(isset($_GET["reg"]))
              {
                if($_GET["reg"]=="true")
                {
                   echo '<script>swal("Atención!", "Usuario registrado con exito.", "success");
                 </script>';
                }
              }  
          
         ?>
    </body>
</html>

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
                                            <table class="table table-condensed" id="tabla">
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
                                                                        <a href="#" role="menuitem" onClick="editar('.$key->id.')">
                                                                            Editar
                                                                        </a>
                                                                    </li> 
                                                                    <li role="presentation">
                                                                        <a href="enviar_clave/'.$key->id.'" role="menuitem" tabindex="-1">
                                                                            Reenviar clave
                                                                        </a>
                                                                    </li>
                                                                    '.$accion.'
                                                                </ul>
                                                            </li> ';
echo"<tr><td>".$contador."</td><td id='nombre-".$key->id."'>".$key->nombre."</td><td id='correo-".$key->id."'>".$key->correo."</td><td id='usuario-".$key->id."'>".$key->usuario."</td><td id='privilegios-".$key->id."'>Nivel-".$key->privilegio."</td><td id='estado-".$key->id."'>".$estado."</td><td>".$accion."</td></tr>";
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

                    <!-- Button trigger modal -->
                    
                    <!-- Modal -->
                    <div  class="modal fade" id="modal_editar" tabindex="1" role="dialog" aria-labelledby="modal_editar" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title pull-left" id="modal_editar">Editar información.</h5>
                            <button type="button pull-right" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <div class="row">
                               <div class="col-sm-6 text-center" style="padding: 40px;">
                                   <img src="local/resources/views/iconos/id-card.png" style="width: 200px;">
                               </div>
                                <div class="col-sm-6">
                                <form id="formulario-editar" method="POST" action="editar_registro">
                                  <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>">
                                  <input class="modal_editar" id="ed_id" name="ed_id" type="hidden">
                                     <label>Nombre</label>
                                    <input class="form-control modal_editar" type="text" name="ed_nombre" id="ed_nombre">
                                    <label>Usuario</label>
                                    <input class="form-control modal_editar" type="text" name="ed_usuario" id="ed_usuario">
                                     <label>Privilegios</label>
                                    <select class="form-control modal_editar" name="ed_privilegios" id="ed_privilegios">
                                        <option value="">Seleccionar</option>
                                        <?php foreach ($privilegios as $key) {
                                            echo'<option value="Nivel-'.$key->id.'">'.$key->desc.'</option>';
                                        }?>
                                    </select>
                                    <label>Correo</label>
                                    <input class="form-control modal_editar" type="text" name="ed_correo" id="ed_correo">
                                    <label>Clave</label>
                                    <input class="form-control modal_editar" type="password" id="ed_clave" name="ed_clave">
                                </form>
                           </div>
                          </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                            <button type="button" class="btn btn-primary" onClick="guardar_editados()">Aplicar</button>
                          </div>
                        </div>
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

            function editar(id)
            { 
                $(".modal_editar").val(""); 
                $("#ed_id").val(id);
                $("#ed_usuario").val($("#usuario-"+id).text());
                $("#ed_nombre").val($("#nombre-"+id).text());
                $("#ed_correo").val($("#correo-"+id).text());
                $("#ed_privilegios").val($("#privilegios-"+id).text());
                $("#ed_estado").val($("#estado-"+id).text());  
                $("#modal_editar").modal();
            }

            function guardar_editados()
            { 
                if($("#ed_nombre").val()==""){ohSnap('Debe colorcar su nombre.', {color: 'orange '});$('#ed_nombre').focus();}
                else if($("#ed_usuario").val()==""){ohSnap('Debe colorcar su usuario.', {color: 'orange '});$('#ed_usuario').focus();}
                else if($("#ed_privilegios").val()==""){ohSnap('Debe colorcar su usuario.', {color: 'orange '});$('#ed_privilegios').focus();}
                else if($("#ed_correo").val()==""){ohSnap('Debe colorcar su correo.', {color: 'orange '});$('#ed_correo').focus();}
                else if($("#ed_clave").val()==""){ohSnap('Debe colorcar su clave.', {color: 'orange '});$('#ed_clave').focus();}
                else
                {
                    $("#formulario-editar").submit();
                }
            }

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

             if($_GET["info"]=="ed_nombre") {echo "<script>ohSnap('Debe colorcar su nombre para poder editar el registro.', {color: 'orange '});$('#ed_nombre').focus();</script>";}   
             if($_GET["info"]=="ed_correo") {echo "<script>ohSnap('Debe colorcar su correo poder editar el registro.', {color: 'orange '});$('#ed_correo').focus();</script>";}
             if($_GET["info"]=="ed_usuario") {echo "<script>ohSnap('Debe colorcar su usuario poder editar el registro.', {color: 'orange '});$('#ed_usuario').focus();</script>";}
             if($_GET["info"]=="ed_clave") {echo "<script>ohSnap('Debe colorcar su clave poder editar el registro.', {color: 'orange '});$('#ed_clave').focus();</script>";}  

             if($_GET["info"]=="require_usuario") {echo "<script>ohSnap('El usuario ya esta registrado.', {color: 'orange '});$('#usuario').focus();</script>";}
             if($_GET["info"]=="require_email") {echo "<script>ohSnap('El correo ya esta registrado.', {color: 'orange '}); </script>";} 
             if($_GET["info"]=="suspend_usuario") {echo "<script>ohSnap('El usuario ha sido activado.', {color: 'orange '}); </script>";}
             if($_GET["info"]=="active_usuario") {echo "<script>ohSnap('El usuario ha sido bloqueado.', {color: 'orange '}); </script>";} 
          if($_GET["info"]=="up_true") {echo '<script>swal("Atención!", "Datos actualizados con éxito", "success");
                 </script>';}


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

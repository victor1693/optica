<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Óptica Hebreo</title>
   <?php include('local/resources/views/includes/referencias_top.html');?>
</head>
<body class="hold-transition login-page" style="background-image: url('https://st.depositphotos.com/1251465/4700/v/950/depositphotos_47004975-stock-illustration-abstract-medicine-background-with-lines.jpg');">
<div class="login-box">
   <div class="register-logo">
    <a href="iniciar"><b>Ópticas </b>Hebreo</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Completa los datos para iniciar sesión</p>
    <form action="login" method="post" id="formulario">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <div class="form-group has-feedback">
        <input id="correo" name="correo" type="text" class="form-control" placeholder="Correo o usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <select name="sucursal" id="sucursal" class="form-control">
          <option value="">Seleccionar</option>
          <?php foreach ($datos as $key) {
            echo '<option value="'.$key->id.'">'.$key->descripcion.'</option>';
          }?>
        </select>
      </div>
      <div class="form-group has-feedback">
        <input id="pass" name="pass" type="password" class="form-control" placeholder="Clave">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">        
        <!-- /.col -->
        <div class="col-xs-12 text-center">
          <a onClick="enviar_formulario()" id="btn_entrar"   class="btn btn-primary btn-block btn-flat">Entrar</a>
        </div>       
        <!-- /.col -->
      </div>
    </form> 
  </div>
  <!-- /.login-box-body -->
  <div id="ohsnap"></div>
</div>

<!-- /.login-box -->
<!-- jQuery 3.1.1 -->
<?php include('local/resources/views/includes/referencias_down.php');?>

<script type="text/javascript">
  function enviar_formulario()
  {
    if($("#correo").val()==""){ohSnap('Debe colorcar su correo.', {color: 'orange '});$('#correo').focus();}
    else if($("#pass").val()==""){ohSnap('Debe colorcar su clave.', {color: 'orange '});$('#pass').focus();}
    else if($("#sucursal").val()==""){ohSnap('Debe seleccionar una sucursal.', {color: 'orange '});$('#sucursal').focus();}

    else{$("#formulario").submit();}
  }
  
</script>>

<?php
  if(isset($_GET["info"]))
  {
    if($_GET["info"]=="correo") echo "<script>ohSnap('Debe colorcar su correo.', {color: 'orange '});$('#correo').focus();</script>";
    else if($_GET["info"]=="pass") echo "<script>ohSnap('Debe colorcar su clave.', {color: 'orange '});$('#pass').focus();</script>";
    else if($_GET["info"]=="false") echo "<script>ohSnap('Usuario no registrado.', {color: 'red'});$('#pass').focus();</script>";
    else if($_GET["info"]=="suspendido") 
      {
          echo '<script>swal("Atención!", " Esta cuenta ha sido suspendida, pongase en contacto con el administrador.", "error");
     </script>';
      };

  } 
 
 ?>
</body>
</html>

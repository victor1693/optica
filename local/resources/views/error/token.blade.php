<!DOCTYPE html>
<html>
    <head>
        <title>
            Token inválido
        </title>
        <?php include('local/resources/views/includes/referencias_top.html');?>
    </head>
    <body class="skin-black fixed">
        <!-- Site wrapper -->
        
        <div class="login-box text-center">
        <?php if(isset($_GET['token']))
        {
            if(!$_GET['token'])
            {
                echo'<img src="https://privacy.google.com/images/animations/your-security/last-frame-1.svg" style="width: 250px;height: 250px;">
                        <div class="login-logo" style="margin-bottom: 0px;">
                            Tokken no válido.
                        </div> 
                         <a href="iniciar"><strong>Regresar</strong></a>  
                    </div>';
            }
            else
            {
                 echo'<img src="https://privacy.google.com/images/animations/take-control/last-frame-3.svg" style="width: 350px;height: 250px;">
                        <div class="login-logo" style="margin-bottom: 0px;">
                            Felicidades! </br><span style="font-size:24px;">La cuenta ha sido activada</span>
                        </div> 
                         <a href="iniciar"><strong>Iniciar sesión</strong></a>  
                    </div>';
            }
        }
        else if(isset($_GET['active']))
        {
            if($_GET['active'])
            {
                echo'<img src="https://privacy.google.com/images/animations/take-control/last-frame-3.svg" style="width: 350px;height: 250px;">
                        <div class="login-logo" style="margin-bottom: 0px;">
                            Atención! </br><span style="font-size:24px;">Ya esta cuenta se encuentra activa</span>
                        </div> 
                         <a href="iniciar"><strong>Iniciar sesión</strong></a>  
                    </div>';
            }
        }
        ?>
        <!-- /.content-wrapper -->
        
        <!-- Control Sidebar -->
        <!-- ./wrapper -->
        <?php include('local/resources/views/includes/referencias_down.php');?>
    </body>
</html>

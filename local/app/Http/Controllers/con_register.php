<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use DB;
use Mail;
class con_register extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$sql="SELECT * FROM pais";
			try {
                 $datos=DB::select($sql);  
                 $vista=View::make('register');
                 $vista->datos=$datos;
                 return $vista;
            } catch (QueryException $e) {
            	return Redirect('error'); 
            } 
	} 	
 	public function token($id)
	{
		$sql="SELECT token,count(token) as contador FROM usuario  WHERE token='".$id."'";
			try {
                 $datos=DB::select($sql);  
                 if($datos[0]->contador)
		          {	
		          	 $sql="SELECT estado as contador FROM usuario  WHERE token='".$id."'";
		             $datos=DB::select($sql);
		             if($datos[0]->contador)
		          	 {
		          	 	return Redirect('token?active=true');
		          	 }
		          	 else
		          	 {
	 					 $sql="UPDATE usuario SET estado=1 WHERE  token='".$id."'";
			             $datos=DB::select($sql);
			             return Redirect('token?token=true'); 
		          	 }
		          }
		          else{return Redirect('token?token=false');}
            } catch (QueryException $e) {
            	return Redirect('error'); 
            } 	 
	}
	public function create()
	{
		//Bloque de validacion del formulario
		$usuario=$_POST["nombre"];
		$clave1=$_POST["clave1"];
		$clave2=$_POST["clave2"];
		$correo=$_POST["correo"];
		$pais=$_POST["pais"];
		$fecha=$_POST["fecha"];
		$sexo=$_POST["sexo"];
		$politicas=$_POST["politicas"];
		if($usuario==""){return Redirect('register?info=nombre');exit();}
		else if($clave1==""){return Redirect('register?info=clave1');exit();}
		else if(strlen($clave1)<7){return Redirect('register?info=max');exit();}
		else if($clave2==""){return Redirect('register?info=clave2');exit();}
		else if($clave1!=$clave2){return Redirect('register?info=claves');exit();}
		else if($correo==""){return Redirect('register?info=correo');exit();}
		else if($pais==""){return Redirect('register?info=pais');exit();}
		else if($fecha==""){return Redirect('register?info=fecha');exit();}
		else if($sexo==""){return Redirect('register?info=sexo');exit();} 
		else if($politicas==false){return Redirect('register?info=politicas');exit();}

		else
		{

			$sql="SELECT email, count(email) as contador FROM usuario WHERE email='".$correo."'";
			$datos=DB::select($sql); 
			if($datos[0]->contador)
			{
				return Redirect('register?validate=correo');
			}
			$sql="SELECT login, count(login) as contador FROM usuario WHERE login='".$usuario."'";
			$datos=DB::select($sql); 
			if($datos[0]->contador)
			{
				return Redirect('register?validate=usuario');
			}
			else
			{
				$tokken=$this->tokken(30);
				$sql="
				INSERT INTO usuario 
				(idUsuario,email,isoPais,genero,fechaNacimiento,login,fechaRegistro,estado,token,clave)
				VALUES(null,'".$correo."','".$pais."','".$sexo."','".$fecha."','".$usuario."',null,'0','".$tokken."','".hash('sha256',$clave1)."');
				"; 
					$data=[
					'name'=>$usuario,
					'correo'=>$correo,
					'token'=>$tokken,
					'fecha'=>date("d-m-y h:m:s"),
					'usuario'=>$usuario,
					'clave'=>"***".substr($clave1, -3),

					];
					try {
						DB::insert($sql);  
						Mail::send("email.confirmacion", $data, function ($message){
						$message->to($_POST["correo"]);
						$message->from("no-reply@opinion-app.com");
					    $message->subject("no-reply@opinion-app.com"); 
						});
						return Redirect('register?info=true');
					} catch (Exception $e) {
						return Redirect('error'); 
					}
			}            
		}
	}
	 function tokken($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	} 
	 
}

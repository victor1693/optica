<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use View;
class con_usuarios extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$sql="SELECT * FROM tbl_usuario";
		try {
				 $vista=View::make('usuarios');
				
				 $datos=DB::select($sql);  
                 $vista->datos=$datos;

                 $datos=DB::select("SELECT * FROM tbl_privilegios");  
                 $vista->privilegios=$datos;

                 return $vista;
		} catch (Exception $e) {
			return Redirect('error'); 
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */


	public function enviar_clave($id)
	{
		dd("entro");
		if($id!="")
		{
			//$sql="UPDATE tbl_usuario SET clave = ".md5('12345')." WHERE id= ".$id." ";
			try {
						$sql="SELECT correo FROM tbl_usuario WHERE id= ".$id." ";
						$datos=DB::select($sql);
						$_POST["correo"]=$datos[0]->correo;
						Mail::send("email.confirmacion", $data, function ($message){
						$message->to($_POST["correo"]);
						$message->from("no-reply@optica-hebreo.com");
					    $message->subject("no-reply@optica-hebreo.com"); 
						});
			} catch (Exception $e) {
				return Redirect('error'); 
			}
		}
	}


	public function suspender($id)
	{
		if($id!="")
		{
			$sql="UPDATE tbl_usuario SET suspendido = 1 WHERE id= ".$id." ";
			try {
			DB::update($sql);
			return Redirect('usuarios?info=active_usuario');
			} catch (Exception $e) {
				return Redirect('error'); 
			}
		}
	}

	public function activar($id)
	{
		if($id!="")
		{
			$sql="UPDATE tbl_usuario SET suspendido = 0 WHERE id= ".$id." ";
			try {
			DB::update($sql);
			return Redirect('usuarios?info=suspend_usuario');
			} catch (Exception $e) {
				return Redirect('error'); 
			}
		}
	}

	public function editar()
	{
		if($_POST['ed_nombre']==""){return Redirect('usuarios?info=ed_nombre');exit();}
		if($_POST['ed_usuario']==""){return Redirect('usuarios?info=ed_usuario');exit();}
		if($_POST['ed_correo']==""){return Redirect('usuarios?info=ed_correo');exit();}		
		if($_POST['ed_clave']==""){return Redirect('usuarios?info=ed_clave');exit();}
		if($_POST['ed_privilegios']==""){return Redirect('usuarios?info=ed_privilegios');exit();}
		$privilegio=explode("-",$_POST['ed_privilegios']);
		
		$sql="UPDATE tbl_usuario SET nombre='".$_POST['ed_nombre']."',usuario='".$_POST['ed_usuario']."',correo='".$_POST['ed_correo']."',clave='".$_POST['ed_clave']."',privilegio='".$privilegio[1]."' WHERE id = ".$_POST['ed_id']."";

		try {
 			$datos=DB::select($sql);
			return Redirect('usuarios?info=up_true');
		} catch (Exception $e) {
			return Redirect('error'); 
			
		}
 
	 
	}

	public function create()
	{
		if($_POST['nombre']==""){return Redirect('usuarios?info=nombre');exit();}
		if($_POST['usuario']==""){return Redirect('usuarios?info=usuario');exit();}
		if($_POST['correo']==""){return Redirect('usuarios?info=correo');exit();}		
		if($_POST['clave']==""){return Redirect('usuarios?info=clave');exit();}

		$sql="SELECT count(id) as  contador FROM tbl_usuario WHERE usuario = '".$_POST['usuario']."'";
		try {
			$datos=DB::select($sql);
			if($datos[0]->contador)
			{
				return Redirect('usuarios?info=require_usuario');
			}
						
		} catch (Exception $e) {
			return Redirect('error'); 
		}

		$sql="SELECT count(id) as  contador FROM tbl_usuario WHERE correo = '".$_POST['correo']."'";
		try {
			$datos=DB::select($sql);
			if($datos[0]->contador)
			{
				return Redirect('usuarios?info=require_email');
			}
						
		} catch (Exception $e) {
			return Redirect('error'); 
		}

		

		$sql="INSERT INTO tbl_usuario VALUES(null,'".$_POST['nombre']."','".$_POST['correo']."','".$_POST['usuario']."',1,'".md5($_POST['clave'])."',0,null)";
		try {
			DB::insert($sql);
			return Redirect('usuarios?reg=true');			
		} catch (Exception $e) {
			return Redirect('error'); 
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

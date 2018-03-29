<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use View;
class con_login extends Controller {

	/**
	 * Display a listing of the resource.
	 *ñ
	 * @return Response
	 */
	public function index()
	{
		try {
				$sql="SELECT * FROM tbl_sucursal";
				 $vista=View::make('login'); 
				 $datos=DB::select($sql);  
                 $vista->
				 datos=$datos;
				return $vista;
		} catch (Exception $e) {
			
		}
		 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create( Request $request)
	{
		 
		 $datos="";
		 if($_POST['correo']==""){return Redirect('iniciar?info=correo');exit();}
		 if($_POST['pass']==""){return Redirect('iniciar?info=pass');exit();}
		 $sql="
		 SELECT id, usuario, correo, clave,COUNT(id) AS contador 
		 FROM tbl_usuario 
		 WHERE (correo = '".$_POST['correo']."' OR  usuario = '".$_POST['correo']."') AND clave ='".md5($_POST['pass'])."'";
		 
		 	try {
                 $datos=DB::select($sql);
            } catch (QueryException $e) {
            	return Redirect('error');
            } 
          if($datos[0]->contador)
          {

          	 $sql="
				 SELECT *,id AS contador 
				 FROM tbl_usuario 
				 WHERE (correo = '".$_POST['correo']."' 
				 OR  usuario = '".$_POST['correo']."') 
				 AND clave ='".md5($_POST['pass'])."'"; 
				 	try {
		                $datos2=DB::select($sql);
		                if($datos2[0]->suspendido==0)
          				{
          					$request->session()->set('correo', $datos2[0]->correo);
				            $request->session()->set('nombre', $datos2[0]->nombre);
				            $request->session()->set('sucursal', $_POST['sucursal']);
				            $request->session()->set('id', $datos2[0]->id);
				            DB::insert("INSERT INTO tbl_kardex VALUES(null,0,".$datos2[0]->id.",'El usuario ".$datos2[0]->correo." ha ingresado al sistema',8,null);");
				            return Redirect('usdash');
          				}
          				else
          				{
          					DB::insert("INSERT INTO tbl_kardex VALUES(null,0,0,'Se intento acceder alsistema con una cuenta suspendida Correo:".$_POST["correo"]." clave ".$_POST["pass"]." ',8,null);");
          					return Redirect('iniciar?info=suspendido');
          				}
		                
		            } catch (QueryException $e) {
		            	return Redirect('error');
		            } 
          	
          }
          else
          {
          	DB::insert("INSERT INTO tbl_kardex VALUES(null,0,0,'Se ha intentado acceder al sistema con los siquientes datos. Correo:".$_POST["correo"]." clave ".$_POST["pass"]." ',8,null);");
          	 return Redirect('iniciar?info=false');
          }
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function salir(Request $request)
	{
		 DB::insert("INSERT INTO tbl_kardex VALUES(null,0,".$request->session()->get('id').",'El usuario ".$request->session()->get('correo')." ha salido del sistema',4,null);"); 
		$request->session()->forget('correo');
		$request->session()->forget('id');
		$request->session()->forget('nombre');
		$request->session()->forget('sucursal');
        return redirect('/');
	}
}

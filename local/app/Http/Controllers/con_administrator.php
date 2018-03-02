<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use View;
class con_administrator extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View("administrator");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function login(Request $request)
	{
		$correo=$_POST["correo"];
		$pass=$_POST["pass"];
		if($correo==""){Redirect("administrator?info=correo");}
		else if($pass==""){Redirect("administrator?info=pass");}

		$sql="SELECT *, count(id) AS contador FROM tbl_administradores WHERE correo='".$correo."' AND clave='".md5($pass)."'";
		try {
			$datos=DB::select($sql);
			if(!$datos[0]->contador)
			{
				DB::insert("INSERT INTO tbl_kardex VALUES(null,0,0,'Se ha intentado acceder al sistema con los siquientes datos. Correo:".$_POST["correo"]." clave ".$_POST["pass"]." ',8,null);");
				return Redirect("administrator?info=false");
			}
			else
			{
				$request->session()->set('correoAdministrador', $datos[0]->correo);
				$request->session()->set('nombreAdministrador', $datos[0]->nombre);
				$request->session()->set('idAdministrador', $datos[0]->id);
				DB::insert("INSERT INTO tbl_kardex VALUES(null,0,".$datos[0]->id.",'El usuario ".$datos[0]->nombre." ha ingresado al sistema',3,null);");
				return Redirect("dashboard");
			}			
		} catch (Exception $e) {
			return "error";
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function salir(Request $request)
	{
		DB::insert("INSERT INTO tbl_kardex VALUES(null,0,".$request->session()->get('idAdministrador').",'El usuario ".$request->session()->get('nombreAdministrador')." ha salido del sistema',4,null);"); 
		$request->session()->forget('correoAdministrador');
		$request->session()->forget('idAdministrador');
		$request->session()->forget('nombreAdministrador');

        return redirect('administrator');
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

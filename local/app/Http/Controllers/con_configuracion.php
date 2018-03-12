<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use View;
class con_configuracion extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("configuracion");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{ 
		 
		if($_POST['email']==""){return Redirect('configuracion?info=correo');exit();}		
		if($_POST['pass']==""){return Redirect('configuracion?info=clave');exit();}

		$sql="UPDATE tbl_administradores SET correo ='".$_POST['email']."', clave ='".md5($_POST['pass'])."' WHERE id=".$request->session()->get("idAdministrador")."";

		try {
			DB::UPDATE($sql);
			DB::insert("INSERT INTO tbl_kardex VALUES(null,0,".session()->get("idAdministrador").",'El administrador ".$_POST['email']."  ha cambiado su clave o correo',2,null);");
			return Redirect('configuracion?info=up_user'); 
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

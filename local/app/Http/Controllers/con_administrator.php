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
	public function login()
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

				return Redirect("administrator?info=false");
			}
			else
			{
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

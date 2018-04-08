<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use DB; 
class con_home extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vista=View::make('us_dash');
		//Consulta de armazon
		$sql="SELECT * FROM tbl_armazones group by marca order by marca asc ";
		$armazones=DB::select($sql);	
		//Consulta de armazon
		$sql="SELECT * FROM tbl_sucursal";
		$sucursal=DB::select($sql);
		//Consulta de datos
		$sql="SELECT * FROM tbl_datos";
		$datos=DB::select($sql);
		//Consulta de eje
		$sql="SELECT * FROM tbl_eje order by eje desc";
		$eje=DB::select($sql);

		//Consulta de eje
		$sql="SELECT * FROM tbl_medicos";
		$medicos=DB::select($sql);

		//Consulta de dp
		$sql="SELECT * FROM tbl_dp order by dp desc";
		$dp=DB::select($sql); 

		$vista->medicos=$medicos; 
		$vista->dp=$dp; 
		$vista->eje=$eje; 
		$vista->armazones=$armazones;
		$vista->sucursal=$sucursal; 
		$vista->datos=$datos;  
		return $vista;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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

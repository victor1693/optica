<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
class con_entregas extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function entregar()
	{
		if($_POST['id']=="")
		{
			echo "0";
			exit();
		}
		else
		{
			$sql="UPDATE tbl_facturas SET estatus = 1 WHERE id=".$_POST['id']."";
			try {
				DB::insert($sql);
				echo "1";
			} catch (Exception $e) {
				echo "error";
			}
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function entrega()
	{
		return View('entregas');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function listar()
	{
		$condicion="";
		if($_POST['rut']!="")
		{
			$condicion=" and t2.rut = '".$_POST['rut']."'";
		}
		$sql="SELECT t1.tipo_producto,t1.estatus, t1.total,t1.id,t2.nombre,t2.rut,if(sum(t3.efectivo_monto + t3.tarjeta_monto + t3.transferencia_monto + t3.cheque_monto) is null,0,sum(t3.efectivo_monto + t3.tarjeta_monto + t3.transferencia_monto + t3.cheque_monto)) as monto_abonado FROM `tbl_facturas` t1 
			left JOIN tbl_cliente t2 ON t2.rut=t1.rut 
			left JOIN tbl_pagos t3 ON t3.id_venta=t1.id
			WHERE t1.id_sucursal=".session()->get('sucursal')." ".$condicion."
			GROUP by t1.id";
			 
		try {
			$datos=DB::select($sql);
			echo json_encode($datos);
		} catch (Exception $e) {
			echo "error";
		}
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

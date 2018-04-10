<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class con_pagos extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function efectivo()
	{
		 
		if($_POST['venta']==""){echo "Debe completar el campo seleccionar la factura.";exit();}
		else if($_POST['monto']==""){echo "Debe indicar el monto a cancelar.";exit();}
		else
		{
			$sql="INSERT INTO tbl_pagos (tipo_pago,id_venta,efectivo_monto) VALUES (
			4,
			".$_POST['venta'].",
			".$_POST['monto']."
			)";
			try {
				DB::insert($sql);
				echo"1";
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
	public function transferencia()
	{
		if($_POST['venta']==""){echo "Debe completar el campo seleccionar la factura.";exit();}
		else if($_POST['monto']==""){echo "Debe indicar el monto a cancelar.";exit();}
		else
		{
			$sql="INSERT INTO tbl_pagos (tipo_pago,id_venta,transferencia_monto) VALUES (
			4,
			".$_POST['venta'].",
			".$_POST['monto']."
			)";
			try {
				DB::insert($sql);
				echo"1";
			} catch (Exception $e) {
				echo "error";
			}
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function cheque()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function tarjetas()
	{
		//
	} 
}

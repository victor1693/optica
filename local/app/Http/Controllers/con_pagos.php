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
	public function cheque()
	{
		   
		if($_POST['venta']==""){echo "Debe completar el campo seleccionar la factura.";exit();}
		else if($_POST['total']==""){echo "Debe indicar el monto a cancelar.";exit();}
		else if($_POST['rut']==""){echo "Debe indicar la RUT del cliente.";exit();}
		else if($_POST['cuenta']==""){echo "Debe indicar el número de cuenta.";exit();}
		else if($_POST['cheque']==""){echo "Debe indicar el número de cheque.";exit();}
		else if($_POST['banco']==""){echo "Debe indicar el banco.";exit();}
		else if($_POST['codigo']==""){echo "Debe indicar el un código.";exit();}
		else if($_POST['fecha']==""){echo "Debe indicar una fecha.";exit();}
		else if($_POST['telefono']==""){echo "Debe indicar un número de teléfono.";exit();}
		else
		{
			$sql="INSERT INTO tbl_pagos (tipo_pago,
			id_venta,
			cheque_banco,
			cheque_n_cuenta,
			cheque_n_cheque,
			cheque_fecha,
			cheque_codigo,
			cheque_telefono,
			cheque_monto,
			cheque_rut
			) VALUES (
			2,
			".$_POST['venta'].",
			'".$_POST['banco']."',
			'".$_POST['cuenta']."',
			'".$_POST['cheque']."',
			'".$this->format_fecha($_POST['fecha'])."',
			'".$_POST['codigo']."',
			'".$_POST['telefono']."',
			".$_POST['total'].",
			'".$_POST['rut']."'		
			)";
			try {
				DB::insert($sql);
				echo"1";
			} catch (Exception $e) {
				echo "error";
			}
		}
	}
	public function tarjetas()
	{
		 /*
			venta:id,
                total:$("#tarjeta_total").val(), 
                tarjeta:$("#select_tarjeta").val(), 
                cuotas:$("#tarjetas_cuotas").val(), 
                operación:$("#tarjeta_operacion").val(),
		 */
		if($_POST['venta']==""){echo "Debe completar el campo seleccionar la factura.";exit();}
		else if($_POST['total']==""){echo "Debe indicar el monto a cancelar.";exit();}
		else if($_POST['operación']==""){echo "Debe indicar un número de operación.";exit();}
		else if($_POST['cuotas']==""){echo "Debe indicar las cuotas.";exit();}
		else if($_POST['tarjeta']==""){echo "Debe indicar su tarjeta.";exit();}

		else
		{
			$sql="INSERT INTO tbl_pagos (tipo_pago,id_venta,tarjeta_nombre,tarjeta_monto,tarjeta_cuota,tarjeta_numero_operacion) VALUES (
			1,
			".$_POST['venta'].",
			'".$_POST['tarjeta']."',
			".$_POST['total'].",
			".$_POST['cuotas'].",
			'".$_POST['operación']."'
			)";
			try {
				DB::insert($sql);
				echo"1";
			} catch (Exception $e) {
				echo "error";
			}
		}
	}
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
			3,
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
 
	 public function pago()
	{
		return View('pagos');
	}

	function format_fecha($fecha)
	{
		if($fecha!="")
		{
			$desarme=explode("/", $fecha);
			$fecha_data=$desarme[2]."-".$desarme[1]."-".$desarme[0];
			return $fecha_data;
		}else
		{
			return $fecha;
		}
		
	}
}

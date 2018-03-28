<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use DB;
require("local/resources/views/funciones/functions.php");
class con_ventas extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function mis_ventas()
	{
		return view("ventas");
	}

	public function temp_tarjeta() //Insertamos en datos en la tabla temporal tarjetas.
 	{

 		$total=str_replace("$ ", "", str_replace(",","",$_POST['total']));
 		$sql="
 		INSERT INTO 
 		tbl_tarjetas_temp 
 		VALUES(null,".$total.",'".$_POST['tarjeta']."',".$_POST['cuotas'].",'".$_POST['operacion']."',".session()->get("id").",'".token(35).strtotime('now')."')"; 

 		if($_POST['total']!="" && $_POST['tarjeta']!="" && $_POST['cuotas']!="" && $_POST['operacion']!="")
 		{
 			try {
 				DB::insert($sql);
 			} catch (Exception $e) {
 				echo "error";
 			}
 		}
 		else
 		{
 			echo"error";
 		}  
	}

	public function temp_cheque() //Insertamos en datos en la tabla temporal cheques.
 	{
 		$total_1=str_replace("$ ", "",$_POST['vtotal']);
 		$total=str_replace(",","",$total_1); 
 		$fecha=""; 
 		if($_POST['vfecha']!="")
 		{
 			$datos=explode("/",$_POST['vfecha']);
 			$fecha=$datos[2]."-".$datos[0]."-".$datos[1];
 		}  
		$sql="INSERT INTO tbl_cheque_temp 
		VALUES(null,
		'".$_POST['vbanco']."',
		'".$_POST['vcuenta']."',
		'".$_POST['vcheque']."',
		'".$fecha."',
		'".$_POST['vcodigo']."',
		'".$_POST['vtelefono']."',
		'".$_POST['vrut']."',
		".$total.",".session()->get("id").",'".token(35).strtotime('now')."')"; 
		 
		 
		if($_POST['vbanco']!="" && $_POST['vcuenta']!="" && $_POST['vcheque']!="" && $fecha!=""  && $_POST['vcodigo']!="" && $_POST['vtelefono']!="" && $_POST['vrut']!="" && $total !="")
 			{
	 			try {
	 				DB::insert($sql);
	 			} catch (Exception $e) {
	 				echo "error";
	 				exit();
	 			}
 			}
 		else
 		{
 			echo"error";
 		}   
	}

	public function s_temp_tarjeta() //Obtenemos en datos de la tabla temporal tarjetas.
 	{
		//Consulta tarjetas
		$sql="SELECT * FROM tbl_tarjetas_temp Where id_usuario = ".session()->get('id')."";
		try {
			$tarjetas=DB::select($sql);
			echo json_encode($tarjetas);			
		} catch (Exception $e) {
			echo  "error";
		}
	}

	public function s_temp_cheque() //Obtenemos en datos de la tabla temporal cheques.
 	{
		//Consulta tarjetas
		$sql="SELECT * FROM tbl_cheque_temp Where id_usuario = ".session()->get('id')."";
		try {
			$cheques=DB::select($sql);
			echo json_encode($cheques);			
		} catch (Exception $e) {
			echo  "error";
		}
	}

	public function d_temp_tarjeta() // Eliminar tarjeta 
 	{
		//Consulta tarjetas
		$sql="DELETE FROM tbl_tarjetas_temp Where id_usuario = ".session()->get('id')." and token='".$_POST['datos']."'";
		try {
			$tarjetas=DB::delete($sql);
			echo "1";			
		} catch (Exception $e) {
			echo  "error";
		}
	}

	public function d_temp_cheque() // Eliminar cheque 
 	{
		//Consulta tarjetas
		$sql="DELETE FROM tbl_cheque_temp Where id_usuario = ".session()->get('id')." and token='".$_POST['datos']."'";
		try {
			$cheques=DB::delete($sql);
			echo "1";			
		} catch (Exception $e) {
			echo  "error";
		}
	}


	 
	public function procesar_venta()
	{
		$token=token(35).strtotime('now'); //Token de seguridad
		$fecha="";
		if($_POST["vfecha_entrega"]!="")
		{
			$datos_fecha=explode("/", $_POST["vfecha_entrega"]);
			$fecha=$datos_fecha[2]."-".$datos_fecha[0]."-".$datos_fecha[1];
		}
		else
		{
			$fecha="";
		}
		$nombre=$_POST["vnombre"];
		$rut=$_POST["vrut"];
		$correo_datos_personales=$_POST["vcorreo_datos_personales"];
		$direccion=$_POST["vdireccion"];
		$telefono=$_POST["vtelefono"];
		$celular=$_POST["vcelular"];		
		$cristales=$_POST["vcristales"];
		$armazon=$_POST["varmazon"];
		$codigo=$_POST["vcodigo"];
		$cil_derecha=$_POST["vcil_derecha"];
		$esf_derecha=$_POST["vesf_derecha"];
		$eje_derecha=$_POST["veje_derecha"];		
		$eje_izquierda=$_POST["veje_izquierda"];
		$cil_izquierda=$_POST["vcil_izquierda"];
		$esf_izquierda=$_POST["vesf_izquierda"];
		$dp=$_POST["vdp"];
		$seguro=$_POST["vseguro"];
		$oftalmologo=$_POST["voftalmologo"];
		$observacion=$_POST["vobservacion"];
		$fecha_entrega=$fecha;
		$sucursal=$_POST["vsucursal"];
		$h_izquierdo=$_POST["vh_izquierdo"];
		$h_derecho=$_POST["vh_derecho"];
		$select_otros=$_POST["vselect_otros"];
		$tipo_producto=$_POST["vtipo_producto"]; 
		$otros=$_POST["votros"];        
		$efectivo=str_replace("$ ", "", $_POST["vefectivo"]); 
		$transferencia=str_replace("$ ", "", $_POST["vtransferencia"]); 
		 
		//Guargamos las tarjetas
		$sql_tmp_tarjetas="SELECT * FROM tbl_tarjetas_temp WHERE id_usuario=".session()->get('id')."";
		try {
			$datos_tarjetas=DB::select($sql_tmp_tarjetas);
			
			foreach ($datos_tarjetas as $key) {
				$sql="INSERT INTO tbl_tarjetas VALUES(null,".$key->total.",'".$key->tarjeta."',".$key->cuota.",".$key->n_operacion.",".$key->id_usuario.",'".$token."')";
				try {
					DB::insert($sql);
				} catch (Exception $e) {
					echo"error";
					$this->eliminar_todo($token);
					exit();
				}
			}
			
		} catch (Exception $e) {
			echo "error";
			$this->eliminar_todo($token);
			exit();
		}
		
		//Guardamos los cheques
		$sql_tmp_cheques="SELECT * FROM tbl_cheque_temp WHERE id_usuario=".session()->get('id')."";
		try {
			$datos_cheques=DB::select($sql_tmp_cheques);
			foreach ($datos_cheques as $key) {
				$sql="INSERT INTO tbl_cheque VALUES(
				null,
				'".$key->banco."',
				'".$key->n_cuenta."',
				'".$key->n_cheque."',
				'".$key->fecha."',
				'".$key->codigo."',
				'".$key->telefono."',
				'".$key->rut."',
				".$key->total.",
				".session()->get('id').",
				'".$token."'
				)";
				 try {
				 	DB::insert($sql);
				 } catch (Exception $e) {
				 	echo "error";
				 	$this->eliminar_todo($token);
					exit();
				 }
			}
			
			
		} catch (Exception $e) {
			echo "error";
			$this->eliminar_todo($token);
			exit();
		}

		//Guardamos la Factura 

		$sql_factura="INSERT INTO tbl_factura VALUES
		(
			null,
			'".$nombre."',
			'".$rut."',
			'".$correo_datos_personales."',
			'".$direccion."',
			'".$telefono."',
			'".$celular."',
			".str_replace(",", "", $efectivo).",
			".str_replace(",", "", $transferencia).",
			0,
			0,
			'".$token."',
			0,
			null
		)";
		 try {
		 	DB::insert($sql_factura); 
		 } catch (Exception $e) {
		 	echo "error";
		 	$this->eliminar_todo($token);
		 	exit();
		 } 

		$sql="
		INSERT INTO tbl_ventas VALUES (
		null,
		'".$cristales."',
		'".$armazon."',
		'".$codigo."',
		'".$cil_derecha."',
		'".$esf_derecha."',
		'".$eje_derecha."',
		'".$cil_izquierda."',
		'".$esf_izquierda."',
		'".$eje_izquierda."',
		'".$dp."',
		'".$seguro."',
		".$oftalmologo.",
		'".$observacion."',
		'".$fecha_entrega."',
		'".$sucursal."',
		".$h_izquierdo.",
		".$h_derecho.",
		'".$otros."',
		'".$tipo_producto."',
		'".$token."', 
		'".session()->get('id')."',
		1,
		null 
		)
		 ";  
	 
		 try {
		 	DB::insert($sql); 
		 	$this->borrar_temporales();
		 } catch (Exception $e) {
		 	echo "error";
		 	$this->eliminar_todo($token);
		 	exit();
		 } 
		 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	function listar_tabla()
	{
			$sql="SELECT t4.id_usuario, t1.efectivo,t1.transferencia,t1.OC,t2.total as tarjeta,t3.total as cheque,sum(t1.efectivo+t1.transferencia+t2.total+t3.total) as suma_total FROM tbl_factura t1
			LEFT JOIN tbl_tarjetas t2 On t2.token=t1.token
			LEFT JOIN tbl_cheque t3 On t3.token=t1.token
            LEFT JOIN tbl_ventas t4 On t4.token=t1.token
             WHERE t4.id_usuario=".session()->get('id')."
			GROUP by t1.token";  

			try {
				$datos=DB::select($sql); 
				echo json_encode($datos);
			} catch (Exception $e) {
				echo "error";
			}
	}

	function eliminar_todo($token)
	{
		$sql="DELETE FROM tbl_ventas WHERE token='".$token."'";
		DB::delete($sql);
		$sql="DELETE FROM tbl_factura WHERE token='".$token."'";
		DB::delete($sql);
		$sql="DELETE FROM tbl_tarjetas WHERE token='".$token."'";
		DB::delete($sql);
		$sql="DELETE FROM tbl_cheque WHERE id_usuario='".$token."'";
		DB::delete($sql); 
	}

	function borrar_temporales()
	{
		    
		$sql="DELETE FROM tbl_tarjetas_temp WHERE id_usuario='".session()->get('id')."'";
		DB::delete($sql);
		$sql="DELETE FROM tbl_cheque_temp WHERE id_usuario='".session()->get('id')."'";
		DB::delete($sql); 
	}
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

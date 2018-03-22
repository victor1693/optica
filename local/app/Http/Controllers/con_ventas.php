<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use DB;
class con_ventas extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function temp_tarjeta() //Insertamos en datos en la tabla temporal tarjetas.
 	{
 		$total=str_replace("$ ", "", str_replace(",","",$_POST['total']));
 		$sql="
 		INSERT INTO 
 		tbl_tarjetas_temp 
 		VALUES(null,".$total.",'".$_POST['tarjeta']."',".$_POST['cuotas'].",'".$_POST['operacion']."')"; 

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
 		$total=str_replace("$ ", "", str_replace(",","",$_POST['vtotal']));
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
		".$total.")
		";

		if($_POST['vbanco']!="" && $_POST['vcuenta']!="" && $_POST['vcheque']!="" && $fecha!=""  && $_POST['vcodigo']!="" && $_POST['vtelefono']!="" && $_POST['vrut']!="" && $total !="")
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

	public function s_temp_tarjeta() //Obtenemos en datos de la tabla temporal tarjetas.
 	{
		//
	}

	public function s_temp_cheque() //Obtenemos en datos de la tabla temporal cheques.
 	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//procesar ventas:
		echo"HOla</br>";
		echo"Saludos";
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

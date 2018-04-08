<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use View;
class con_clientes extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("clientes");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if($_POST['nombre']==""){echo "Debe completar el campo nombre.";return 0;}
		else if($_POST['correo']==""){echo "Debe completar el campo correo.";return 0;}
		else if($_POST['rut']==""){echo "Debe completar el campo rut.";return 0;}
		else if($_POST['telefono']==""){echo "Debe completar el campo teléfono.";return 0;}
		else if($_POST['celular']==""){echo "Debe completar el campo celular.";return 0;}
		else if($_POST['direccion']==""){echo "Debe completar el campo dirección.";return 0;}
		else
		{
			$sql="INSERT INTO tbl_cliente VALUES(
			null,
			'".$_POST['rut']."',
			'".$_POST['nombre']."',
			'".$_POST['correo']."',
			'".$_POST['direccion']."',
			'".$_POST['telefono']."',
			'".$_POST['celular']."',
			null
			)";
			try {
				DB::insert($sql);
				echo "1";
				
			} catch (Exception $e) {
				echo 0;
			}
		}
	}
	public function update()
	{
		if($_POST['nombre']==""){echo "Debe completar el campo nombre.";return 0;}
		else if($_POST['correo']==""){echo "Debe completar el campo correo.";return 0;}
		else if($_POST['rut']==""){echo "Debe completar el campo rut.";return 0;}
		else if($_POST['telefono']==""){echo "Debe completar el campo teléfono.";return 0;}
		else if($_POST['celular']==""){echo "Debe completar el campo celular.";return 0;}
		else if($_POST['direccion']==""){echo "Debe completar el campo dirección.";return 0;}
		else
		{
			$sql="UPDATE tbl_cliente SET 
			correo='".$_POST['correo']."',
			direccion='".$_POST['direccion']."',
			telefono='".$_POST['telefono']."',
			celular='".$_POST['celular']."'
			WHERE rut= '".$_POST['rut']."'
			";
			try {
				DB::update($sql);
				echo "2";
				
			} catch (Exception $e) {
				echo 0;
			}
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function select()
	{
		$sql="SELECT * FROM tbl_cliente";
		try {
			$datos=DB::select($sql);
			echo json_encode($datos);			
		} catch (Exception $e) {
			echo "error";
		}
	}

	public function buscar()
	{
		 
		$sql="SELECT *, count(id) as cantidad FROM tbl_cliente WHERE rut='".$_POST['rut']."'";
		try {
			$datos=DB::select($sql);
			echo json_encode($datos);			
		} catch (Exception $e) {
			echo "error";
		}
	}

	public function selectunico()
	{
		if($_POST['rut']==""){echo "5";}		 
		else
		{
			$sql="SELECT * FROM tbl_cliente WHERE rut='".$_POST['rut']."'";
			try {
				$datos=DB::select($sql);
				echo json_encode($datos);			
			} catch (Exception $e) {
				echo "0";
			}
		}
		
	} 
}

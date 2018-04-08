<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use DB;
class con_factura extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function select()
	{
		$sql="SELECT t1.total,t1.id,t2.nombre,t2.rut FROM `tbl_ventas` t1 left JOIN tbl_cliente t2 ON t2.rut=t1.rut WHERE t1.id_sucursal=".session()->get('sucursal')." and t1.rut='".$_POST['rut']."';";
		try {
			$datos=DB::select($sql);
			echo json_encode($datos);
		} catch (Exception $e) {
			echo"error";
		}
	}

	public function detalle()
	{
		 return view('detallefactura');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			$cristales=$_POST["cristales"]; 
            $armazon =$_POST["armazon"]; 
            $codigo =$_POST["codigo"]; 
            $cil_derecho= $_POST["cil_derecho"]; 
            $cil_izquierdo= $_POST["cil_izquierdo"]; 
            $eje_derecho =$_POST["eje_derecho"]; 
            $eje_izquierdo =$_POST["eje_izquierdo"]; 
            $esf_derecho= $_POST["esf_derecho"]; 
            $esf_izquierdo= $_POST["esf_izquierdo"]; 
            $dp =$_POST["dp"]; 
            $dc =$_POST["dc"]; 
            $seguro =$_POST["seguro"]; 
            $oftalmologo =$_POST["oftalmologo"]; 
            $observacion =$_POST["observacion"]; 
            $fecha_entrega =$_POST["fecha_entrega"]; 
            $sucursal =$_POST["sucursal"]; 
            $h_izquierdo= $_POST["h_izquierdo"]; 
            $h_derecho= $_POST["h_derecho"]; 
            $otros =$_POST["otros"]; 
            $rut =$_POST["rut"]; 
            $producto =$_POST["producto"];
			$total =$_POST["total"];

            if($rut==""){echo "Debe agregar la RUT del cliente.";exit();}
            $sql="SELECT count(*) as cantidad FROM tbl_cliente WHERE rut='".$rut."' ";
            try {
            	$datos=DB::select($sql);
            	 if($datos[0]->cantidad!=1)
            	 {
            	 	echo "La RUT que intenta ingresar no se encuentra en registrada.";
            	 	exit();
            	 }
            } catch (Exception $e) {
            	echo "error";
            	exit();
            }

            if($producto===""){echo "Debe seleccionar el producto.";exit();}  


            //validamos
            if($producto=="lentes_cerca")
            {
            if($cristales==""){echo "Debe agregar el cristal.";exit();} 
            if($armazon==""){echo "Debe seleccionar el armazon.";exit();} 
            if($codigo==""){echo "Debe agregar un código.";exit();} 
            if($cil_derecho==""){echo "Debe seleccionar CIL-DERECHO.";exit();} 
            if($cil_izquierdo==""){echo "Debe Debe seleccionar CIL-IZQUIERDO.";exit();} 
            if($eje_derecho==""){echo "Debe seleccionar EJE-DERECHO.";exit();} 
            if($eje_izquierdo==""){echo "Debe seleccionar EJE-IZQUIERDO.";exit();} 
            if($esf_derecho==""){echo "Debe seleccionar ESF-DERECHO.";exit();} 
            if($esf_izquierdo==""){echo "Debe seleccionar ESF-IZQUIERDO.";exit();} 
            if($dp==""){echo "Debe seleccionar el DP.";exit();} 
            if($seguro==""){echo "Debe seleccionar el seguro.";exit();} 
            if($oftalmologo=="0"){echo "Debe seleccionar el oftalmologo.";exit();}             
            if($fecha_entrega==""){echo "Debe seleccionar la fecha de entrega.";exit();}
            if($sucursal=="0"){echo "Debe seleccionar la sucursal.";exit();} 
            if($h_derecho=="0"){echo "Debe seleccionar el H-DERECHO.";exit();} 
            if($h_izquierdo==""){echo "Debe seleccionar H-IZQUIERDO.";exit();} 
            if($total==""){echo "Debe colocar el monto total.";exit();}  
            }
            else if($producto=="lentes_lejos")
            {
            if($cristales==""){echo "Debe agregar el cristal.";exit();} 
            if($armazon==""){echo "Debe seleccionar el armazon.";exit();} 
            if($codigo==""){echo "Debe agregar un código.";exit();} 
            if($cil_derecho==""){echo "Debe seleccionar CIL-DERECHO.";exit();} 
            if($cil_izquierdo==""){echo "Debe Debe seleccionar CIL-IZQUIERDO.";exit();} 
            if($eje_derecho==""){echo "Debe seleccionar EJE-DERECHO.";exit();} 
            if($eje_izquierdo==""){echo "Debe seleccionar EJE-IZQUIERDO.";exit();} 
            if($esf_derecho==""){echo "Debe seleccionar ESF-DERECHO.";exit();} 
            if($esf_izquierdo==""){echo "Debe seleccionar ESF-IZQUIERDO.";exit();} 
            if($dp==""){echo "Debe seleccionar el DP.";exit();} 
            if($seguro==""){echo "Debe seleccionar el seguro.";exit();} 
            if($oftalmologo=="0"){echo "Debe seleccionar el oftalmologo.";exit();}             
            if($fecha_entrega==""){echo "Debe seleccionar la fecha de entrega.";exit();}
            if($sucursal=="0"){echo "Debe seleccionar la sucursal.";exit();}  
            if($total==""){echo "Debe colocar el monto total.";exit();}
            } 
            else if($producto=="lentes_traspaso")
            {            
            if($armazon==""){echo "Debe seleccionar el armazon.";exit();} 
            if($codigo==""){echo "Debe agregar un código.";exit();}             
            if($dp==""){echo "Debe seleccionar el DP.";exit();}  
            if($oftalmologo=="0"){echo "Debe seleccionar el oftalmologo.";exit();}             
            if($fecha_entrega==""){echo "Debe seleccionar la fecha de entrega.";exit();}
            if($sucursal=="0"){echo "Debe seleccionar la sucursal.";exit();} 
            if($h_derecho=="0"){echo "Debe seleccionar el H-DERECHO.";exit();} 
            if($h_izquierdo==""){echo "Debe seleccionar H-IZQUIERDO.";exit();}   
            if($total==""){echo "Debe colocar el monto total.";exit();}          
            } 
            else if($producto=="lentes_contacto")
            {            
            if($cil_derecho==""){echo "Debe seleccionar CIL-DERECHO.";exit();} 
            if($cil_izquierdo==""){echo "Debe Debe seleccionar CIL-IZQUIERDO.";exit();} 
            if($eje_derecho==""){echo "Debe seleccionar EJE-DERECHO.";exit();} 
            if($eje_izquierdo==""){echo "Debe seleccionar EJE-IZQUIERDO.";exit();} 
            if($esf_derecho==""){echo "Debe seleccionar ESF-DERECHO.";exit();} 
            if($esf_izquierdo==""){echo "Debe seleccionar ESF-IZQUIERDO.";exit();} 
            if($dp==""){echo "Debe seleccionar el DP.";exit();} 
            if($dc==""){echo "Debe seleccionar el DC.";exit();}           
            if($oftalmologo=="0"){echo "Debe seleccionar el oftalmologo.";exit();}             
            if($fecha_entrega==""){echo "Debe seleccionar la fecha de entrega.";exit();}            
            if($sucursal=="0"){echo "Debe seleccionar la sucursal.";exit();}  
            if($total==""){echo "Debe colocar el monto total.";exit();}
            } 
            else if($producto=="lentes_sol")
            {            
            if($armazon==""){echo "Debe seleccionar el armazon.";exit();} 
            if($codigo==""){echo "Debe agregar un código.";exit();} 
            if($total==""){echo "Debe colocar el monto total.";exit();} 
            }     
			else if($producto=="otros_lentes")
            { 
            if($otros==""){echo "Debe seleccionar el otro producto.";exit();} 
            if($total==""){echo "Debe colocar el monto total.";exit();}	
            } 
            if($dc==""){$dc=0;} 
          	$sql="INSERT INTO tbl_ventas VALUES(
          	null,
          	'".$cristales."',
          	'".$armazon."',
          	'".$codigo."',
          	'".$cil_derecho."',
          	'".$esf_derecho."',
          	'".$eje_derecho."',
          	'".$cil_izquierdo."',
          	'".$esf_izquierdo."',
          	'".$eje_izquierdo."',
          	".$dc.",
          	'".$dp."',
          	'".$seguro."',
          	".$oftalmologo.",
          	'".$observacion."',
          	'".$this->format_fecha($fecha_entrega)."',
          	".$sucursal.",			
          	".$h_izquierdo.",
          	".$h_derecho.",
          	'".$otros."',
          	'".$producto."',
          	'".$rut."',
          	".session()->get('sucursal').",
          	".$total.",
          	null
          	)"; 
          	try {
          		DB::insert($sql);
          		echo "1";          		
          	} catch (Exception $e) {
          		echo "error";
          	}
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

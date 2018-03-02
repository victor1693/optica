<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use View;
class con_kardex extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vista=View::make('kardex');
		$kardex=DB::select('SELECT t1.*,t2.descripcion as "descrip",if(t1.id_user=1,"Administrador","General") as privilegio,t3.nombre from tbl_kardex t1
			LEFT JOIN tbl_tipo_kardex t2  ON  t1.tipo = t2.id
			LEFT JOIN tbl_usuario t3 On t1.id_user = t1.id_user GROUP BY t1.tmp order by t1.tmp desc');
		$vista->kardex=$kardex;
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

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\detalleingreso;
use App\ingresoproducto;
use Illuminate\Http\Request;
use DB;

class IngresoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		

	$detalleingresos = DB::table('detalleingresos')->join('productos', 'detalleingresos.producto', '=', 'productos.CodProducto')->select('detalleingresos.*', 'productos.nombre')->get();



		return view('ingreso.index',compact('detalleingresos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//$codigoo = DB::select('select last_insert_id()'); 

		//$id= DB::select('select MAX(id) FROM ingresoproductos');


		$id = DB::table('ingresoproductos')->max('id');

		$codigo = DB::table('ingresoproductos')->where('id', $id)->pluck('CodIngreso');

		$l=strlen($codigo);

		$partenumeral = (int)substr($codigo,4,$l);
		$partenumeral++;


		$codigo = "Ing0".$partenumeral;

	

		$proveedores = DB::table('proveedors')->get();
		$productos = DB::table('productos')->get();
		$sucursales = DB::table('sucursals')->get();


		return view('ingreso.create',array('proveedores' => $proveedores , 'productos'=>$productos,'sucursales'=>$sucursales,'codigo'=>$codigo ));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		if($request->ajax()){
            ingresoproducto::create($request->all());
            return response()->json([
                $request->all()
            ]);

            return Redirect::to('sucursal');

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

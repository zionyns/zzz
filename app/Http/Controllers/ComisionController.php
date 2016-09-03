<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\ventausuario;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ComisionController extends Controller {


	public function conversor_monedas($moneda_origen,$moneda_destino,$cantidad) {
		$get = file_get_contents("https://www.google.com/finance/converter?a=$cantidad&from=$moneda_origen&to=$moneda_destino");
		$get = explode("<span class=bld>",$get);
		$get = explode("</span>",$get[1]);  
		return preg_replace("/[^0-9\.]/", null, $get[0]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */ 
	public function index(Request $request)
	{
		 $users = DB::table('users')->get();
         if ($request->ajax()) {
            $ventausuario = ventausuario::all();	
            return response()->json($ventausuario);
            
        }
        return view('comision.index',$arrayName = array('users'=>$users));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('comision.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		
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

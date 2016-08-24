<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\venta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use DB;

class VentasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index(Request $request)
	{
		//

		if ($request->ajax()) {


			$sucursal = Auth::user()->sucursal;

			$ventas = DB::table('users')->join('ventas', 'users.username', '=', 'ventas.vendedor')->select('ventas.*', 'users.sucursal')->where('users.sucursal',$sucursal)->get();
            return response()->json($ventas);
            
        }

		return view('ventas.index');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	
	{
		$codigos = DB::table('ventas')->lists('CodVenta');
		$l = count($codigos);
		$codigo = $codigos[$l-1];
		$partes=explode("0", $codigo);
		$parte1=$partes[0];
		$parte2=$partes[1];
		$int=(int)$parte2;
		$int=$int+1;
		$codigo=$parte1."0".$int;




		$monedas = DB::table('monedas')->get();
		$productos = DB::table('productos')->get();
		$users = DB::table('users')->get();

		return view('ventas\create',$arrayName = array('users'=>$users,'productos'=>$productos,'codigo'=>$codigo,'monedas'=>$monedas));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if($request->ajax()){
            venta::create($request->all());
            return response()->json([
                $request->all()
            ]);
            return Redirect::to('/venta');

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
		
		return view("ventas\index");
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $Request)
	{
		return view("ventas\index");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return view("ventas\index");
	}

}

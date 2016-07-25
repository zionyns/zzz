<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\producto;

use Illuminate\Http\Request;

use Session;
use Redirect;

class ProductoController extends Controller {
	
	public function autocomplete(Request $request)
	{
		$term=$request->term;
		$data = producto::where('CodProducto','LIKE','%'.$term.'%')
		->take(10)
		->get();
		$results=array();
		foreach ($data as $key => $value) {
			$results[]=['id'=>$value->id,'nombre'=>$value->nombre,'stock'=>$value->stock,'precio'=>$value->precio,'value'=>$value->CodProducto];
		}
		return response()->json($results);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		if ($request->ajax()) {
            $producto = producto::all();
            return response()->json($producto);
        }
        return view('producto.index',compact('producto'));


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('producto.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if($request->ajax()){
            producto::create($request->all());
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
		$producto = producto::find($id);
        return response()->json($producto);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $Request,$id)
	{
		$producto = producto::find($id);
        $producto->fill($Request->all());
        $producto->save();
        return response()->json(["mensaje" => "listo"]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$producto = producto::find($id);
        $producto->delete();
        return response()->json(["mensaje"=>"borrado"]);
	}

}

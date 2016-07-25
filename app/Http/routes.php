<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| 
*/

//Route::get('nombre/{nombre}', function($nombre){
//	return "ni mombre es".$nombre;

/*Llamadas al controlador Auth*/
Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión


/*Rutas privadas solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{
    
    Route::get('/', 'AuthController@showhome1'); // Vista de inicio
    route::resource('venta','VentasController');
});


Route::group(['before' => 'auth'], function()
{
    Route::get('home', 'AuthController@showhome2'); // Vista de inicio2
});



/////////////////////////////////////////////////
Route::get('template', function(){

	return view('template');
});

//////////////////////////////////////////////////7
Route::resource('usuario','UsuarioController');

route::	get('producto/autocomplete',array('as' =>'autocomplete','uses' =>'ProductoController@autocomplete'));
Route::resource('producto','ProductoController');

route::resource('sucursal','SucursalController');

route::resource('venta','VentasController');
Route::resource('detalleventa','DetalleVentaController');


route::resource('proveedor','ProveedorController');


Route::resource('genero','GeneroController');


Route::resource('ingreso','IngresoController');

Route::resource('detalleingreso','DetalleIngresoController');

Route::resource('pagoventa','PagoventaController');

Route::resource('ventausuario','VentausuarioController');



Route::get('listado_reportes', 'PdfController@index');
Route::get('crear_reporte_usuario/{tipo}', 'PdfController@crear_reporte_usuario');
<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleingreso extends Model {

	//
	protected $fillable = ['producto', 'PrecioUnitario', 'cantidad','total','ingreso'];

}

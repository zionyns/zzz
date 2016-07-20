<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleventa extends Model {

	protected $fillable = ['producto' ,'cantidad','total','venta'];

}

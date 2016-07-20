<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleventasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalleventas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('producto');
			$table->integer('cantidad');
			$table->float('total');

			$table->string('venta');
			
			$table->foreign('producto')->references('CodProducto')->on('productos');
			$table->foreign('venta')->references('CodVenta')->on('ventas');
			
			
			$table->timestamps();



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalleventas');
	}

}

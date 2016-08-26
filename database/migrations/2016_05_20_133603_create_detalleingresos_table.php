<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleingresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalleingresos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('producto')->unsigned();
			$table->float('PrecioUnitario');
			$table->integer('cantidad');
			$table->float('total');
						

			$table->string('ingreso');

			$table->foreign('producto')->references('id')->on('productos');
			$table->foreign('ingreso')->references('CodIngreso')->on('ingresoproductos');
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
		Schema::drop('detalleingresos');
	}

}

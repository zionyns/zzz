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
			$table->string('producto');
			$table->float('PrecioUnitario');
			$table->integer('cantidad');
			$table->float('total');
						

			$table->string('ingreso');
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

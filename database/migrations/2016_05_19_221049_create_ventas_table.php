<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('CodVenta')->unique();
			$table->string('fecha');
			$table->string('vendedor');
			$table->float('preciototal');
			$table->float('descuento');
			

			$table->foreign('vendedor')->references('username')->on('users');

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
		Schema::drop('ventas');
	}

}
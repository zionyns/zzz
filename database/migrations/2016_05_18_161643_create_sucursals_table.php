<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursals', function(Blueprint $table)
		{
			

			$table->increments('id');

			$table->string('CodSucursal')->unique();
			$table->string('NombreSucursal');
			$table->string('Direccion');

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
		Schema::drop('sucursals');
	}

}

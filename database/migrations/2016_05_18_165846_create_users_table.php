<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{


			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('rol');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->string('sucursal');
		
			$table->foreign('sucursal')->references('CodSucursal')->on('sucursals');
			
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
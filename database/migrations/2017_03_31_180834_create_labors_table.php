<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaborsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name');
			$table->string('company_phone');
			$table->string('position');
			$table->string('work_area');
			$table->string('salary');
			$table->string('sector');
			$table->integer('graduate_id')->unsigned()->foreign('graduate_id')->references('id')->on('graduates');
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
		Schema::drop('labors');
	}

}

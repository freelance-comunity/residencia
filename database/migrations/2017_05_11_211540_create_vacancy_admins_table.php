<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyAdminsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vacancy_admins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('position');
			$table->string('task');
			$table->string('abilities');
			$table->string('area');
			$table->string('salary');
			$table->string('contact');
			$table->string('phone');
			$table->string('email');
			$table->string('period');
			$table->string('avatar')->default('default.jpg');
			$table->integer('user_id')->unsigned()->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('vacancy_admins');
	}

}

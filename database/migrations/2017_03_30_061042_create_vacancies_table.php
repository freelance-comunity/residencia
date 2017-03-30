<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vacancies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('position');
			$table->string('task');
			$table->string('abilities');
			$table->string('area');
			$table->string('salary');
			$table->string('contact');
			$table->string('period');
			$table->integer('company_id')->unsigned()->foreign('company_id')->references('id')->on('companies');
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
		Schema::drop('vacancies');
	}

}

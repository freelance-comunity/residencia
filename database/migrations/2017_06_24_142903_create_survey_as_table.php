<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_as', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('q_id');
			$table->string('o_value');
			$table->integer('survey_id')->unsigned()->foreign('survey_id')->references('id')->on('surveys');
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
		Schema::drop('survey_as');
	}

}

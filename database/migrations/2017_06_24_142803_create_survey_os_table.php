<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_os', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('o_text');
			$table->text('o_value');
			$table->integer('survey_q_id')->unsigned()->foreign('survey_q_id')->references('id')->on('survey_qs');
			$table->string('o_status');
			$table->integer('survey_id')->unsigned()->foreign('survey_id')->references('id')->on('surveys');
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
		Schema::drop('survey_os');
	}

}

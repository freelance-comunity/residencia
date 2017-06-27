<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyqsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_qs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('q_format');
			$table->text('q_text');
			$table->integer('q_createdby');
			$table->string('q_status');
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
		Schema::drop('survey_qs');
	}

}

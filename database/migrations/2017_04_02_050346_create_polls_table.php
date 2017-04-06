<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('polls', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('question_1');
			$table->string('question_2');
			$table->string('question_3');
			$table->string('question_4');
			$table->string('question_5');
			$table->string('question_6');
			$table->string('question_7');
			$table->string('question_8');
			$table->string('question_9');
			$table->string('question_10');
			$table->string('question_11');
			$table->string('question_12');
			$table->string('question_13');
			$table->string('question_14');
			$table->text('comment');
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
		Schema::drop('polls');
	}

}

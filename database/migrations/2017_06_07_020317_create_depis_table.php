<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepisTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('depis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_project');
			$table->string('line_investigation');
			$table->string('name_residence');
			$table->string('names_residents');
			$table->string('name_tesis');
			$table->string('names_tesis');
			$table->string('publications');
			$table->string('publications_number');
			$table->string('name_magazine');
			$table->string('type_publication');
			$table->string('name_article');
			$table->string('prototype');
			$table->string('patents');
			$table->string('validity_of');
			$table->string('valid_at');
			$table->string('others');
			$table->integer('teacher_id')->unsigned()->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
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
		Schema::drop('depis');
	}

}

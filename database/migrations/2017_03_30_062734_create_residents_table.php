<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('residents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_project');
			$table->string('area');
			$table->string('objective');
			$table->string('students');
			$table->string('applicant');
			$table->string('address');
			$table->string('contact');
			$table->string('phone');
			$table->string('cel');
			$table->string('email');
			$table->string('period');
			$table->string('status');
			$table->integer('company_id')->unsigned()->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
		Schema::drop('residents');
	}

}

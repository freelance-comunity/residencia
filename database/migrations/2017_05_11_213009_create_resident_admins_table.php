<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentAdminsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resident_admins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_project');
			$table->string('area');
			$table->string('objetive');
			$table->string('students');
			$table->string('applicant');
			$table->string('address');
			$table->string('contact');
			$table->string('phone');
			$table->string('cel');
			$table->string('email');
			$table->string('period');
			$table->string('status');
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
		Schema::drop('resident_admins');
	}

}

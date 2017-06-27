<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->string('question_15');
            $table->string('question_16');
            $table->string('question_17');
            $table->string('question_18');
            $table->string('question_19');
            $table->string('question_20');
            $table->dropColumn('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->dropColumn('question_15');
            $table->dropColumn('question_16');
            $table->dropColumn('question_17');
            $table->dropColumn('question_18');
            $table->dropColumn('question_19');
            $table->dropColumn('question_20');
            $table->string('comment');
        });
    }
}

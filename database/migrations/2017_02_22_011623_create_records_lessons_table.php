<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->date('date_lesson');
            $table->integer('daily_team_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->timestamps();

            $table->foreign('daily_team_id')->references('id')->on('daily_teams');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records_lessons');
    }
}

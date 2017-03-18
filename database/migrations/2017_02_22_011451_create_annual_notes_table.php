<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnualNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->float('note');
            $table->string('teacher_name');
            $table->integer('lesson_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();


            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annual_notes');
    }
}

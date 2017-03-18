<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesAssignedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes_assigneds', function (Blueprint $table) {
            $table->increments('id');
            $table->float('note');
            $table->string('teacher_name');
            $table->integer('bimester_id')->unsigned();
            $table->integer('lesson_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('types_note_id')->unsigned();
            $table->timestamps();

            $table->foreign('bimester_id')->references('id')->on('bimesters');
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('types_note_id')->references('id')->on('types_notes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes_assigneds');
    }
}

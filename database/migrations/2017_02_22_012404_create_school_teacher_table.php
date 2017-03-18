<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_teacher', function (Blueprint $table) {
            $table->integer('school_id')->unsigned();
            $table->integer('teacher_id')->unsigned();

            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_teacher');
    }
}

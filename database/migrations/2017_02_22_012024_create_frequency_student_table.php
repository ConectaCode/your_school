<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequencyStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequency_student', function (Blueprint $table){
            $table->integer('frequency_id')->unsigned();
            $table->integer('student_id')->unsigned();

            $table->foreign('frequency_id')->references('id')->on('frequencies');
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
        Schema::dropIfExists('frequency_student');
    }
}

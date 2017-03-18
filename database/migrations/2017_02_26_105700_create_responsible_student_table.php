<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsibleStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsible_student', function (Blueprint $table) {
            $table->integer('responsible_id')->unsigned();
            $table->integer('student_id')->unsigned();

            $table->foreign('responsible_id')->references('id')->on('responsibles');
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
        \Schema::dropIfExists('responsible_student');
    }
}

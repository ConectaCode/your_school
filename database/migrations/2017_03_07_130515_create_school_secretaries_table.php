<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolSecretariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_secretaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->integer('physical_person_id')->unsigned();
            $table->timestamps();

            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('physical_person_id')->references('id')->on('physical_people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_secretaries');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legal_entity_id')->unsigned();
            $table->integer('secretary_of_education_id')->unsigned();
            $table->timestamps();

            $table->foreign('legal_entity_id')->references('id')->on('legal_entities');
            $table->foreign('secretary_of_education_id')->references('id')->on('secretary_of_educations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}

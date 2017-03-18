<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretaryOfEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretary_of_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legal_entity_id')->unsigned();
            $table->timestamps();

            $table->foreign('legal_entity_id')->references('id')->on('legal_entities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secretary_of_educations');
    }
}

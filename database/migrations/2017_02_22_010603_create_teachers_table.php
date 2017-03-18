<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('physical_person_id')->unsigned();
            $table->integer('matter_id')->unsigned();
            $table->string('other_formations')->nullable();
            $table->timestamps();

            $table->foreign('physical_person_id')->references('id')->on('physical_people');
            $table->foreign('matter_id')->references('id')->on('matters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}

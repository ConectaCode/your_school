<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->date('date_of_birth');
            $table->integer('person_id')->unsigned();
            $table->timestamps();

            $table->foreign('person_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physical_people');
    }
}

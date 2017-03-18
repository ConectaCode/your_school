<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_year');
            $table->integer('lesson_id')->unsigned();
            $table->timestamps();

            $table->foreign('lesson_id')->references('id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_teams');
    }
}

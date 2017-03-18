<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bimester_id')->unsigned();
            $table->integer('books_team_id')->unsigned();
            $table->timestamps();

            $table->foreign('bimester_id')->references('id')->on('bimesters');
            $table->foreign('books_team_id')->references('id')->on('books_teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_teams');
    }
}

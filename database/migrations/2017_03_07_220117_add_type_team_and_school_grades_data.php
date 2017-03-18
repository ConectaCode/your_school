<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use YourSchool\SchoolGrade;
use YourSchool\TypesTeam;

class AddTypeTeamAndSchoolGradesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $typeTeam1 = TypesTeam::create([
            'name' => 'Ensino Fundamental I'
        ]);

        $typeTeam2 = TypesTeam::create([
            'name' => 'Ensino Fundamental II'
        ]);

        for ($i = 1; $i < 10; $i++){

            SchoolGrade::create([
                'name' => $i . "º ano",
                'types_team_id' => $i < 6 ? $typeTeam1->id : $typeTeam2->id
            ]);

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

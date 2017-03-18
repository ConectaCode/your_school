<?php

namespace YourSchool\Helpers;

use YourSchool\Team;

class ExistTeam
{
    public function findTeam($id)
    {
        $team = Team::find($id);

        return $team;
    }

}
<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class SchoolGrade extends Model
{
    protected $fillable = [

        'name', 'types_team_id'

    ];
}

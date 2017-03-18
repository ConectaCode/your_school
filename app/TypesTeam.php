<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class TypesTeam extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
}

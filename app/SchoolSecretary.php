<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class SchoolSecretary extends Model
{
    protected $fillable = [
        'school_id', 'physical_person_id'
    ];

    public function schools()
    {
        return $this->belongsTo(School::class);
    }
}

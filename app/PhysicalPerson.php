<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class PhysicalPerson extends Model
{
    protected $fillable = [
        'cpf', 'rg', 'date_of_birth', 'person_id'
    ];

    protected $with = [
        'person'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function teacher()
    {
        return $this->hasOne(Person::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function school_secretaries()
    {
        return $this->hasOne(SchoolSecretary::class);
    }
}

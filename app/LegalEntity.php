<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class LegalEntity extends Model
{

    protected $fillable = [
        'cnpj', 'ie', 'foundation_date', 'person_id'
    ];

    protected $with = [
        'person'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function school()
    {
        return $this->hasOne(School::class);
    }

    public function secretary_of_education(){
        return $this->hasOne(SecretaryOfEducation::class);
    }
}

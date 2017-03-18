<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class SecretaryOfEducation extends Model
{
    protected $fillable = [
        'legal_entity_id'
    ];

    protected $with = [
        'legal_entity'
    ];

    public function legal_entity()
    {
        return $this->belongsTo(LegalEntity::class);
    }

    public function schools(){
        return $this->hasMany(School::class);
    }

    public function getNameAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                return $this->legal_entity->person->name;
            }
        }
    }
}

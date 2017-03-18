<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = [
        'legal_entity_id', 'secretary_of_education_id'
    ];

    protected $with = [
        'legal_entity'
    ];

    public function legal_entity()
    {
        return $this->belongsTo(LegalEntity::class);
    }

    public function teams(){
        return $this->hasMany(Team::class);
    }

    /*
     * Get Mutator
     */

    public function getCnpjAttribute()
    {
        if (!empty($this->legal_entity)) {
            return $this->legal_entity->cnpj;
        }
    }

    public function getIeAttribute()
    {
        if (!empty($this->legal_entity)) {
            return $this->legal_entity->ie;
        }
    }

    public function getFoundationDateAttribute()
    {
        if (!empty($this->legal_entity)) {
            return $this->legal_entity->foundation_date;
        }
    }

    public function getNameAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                return $this->legal_entity->person->name;
            }
        }
    }

    public function getPhone1Attribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                return $this->legal_entity->person->phone_1;
            }
        }
    }

    public function getPhone2Attribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->phone_2)) {
                    return $this->legal_entity->person->phone_2;
                }
            }
        }
    }

    public function getEmailAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->user)) {
                    return $this->legal_entity->person->user->email;
                }
            }
        }
    }

    public function getPublicPlaceAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->public_place;
                }
            }
        }
    }

    public function getLocalTypeAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->local_type;
                }
            }
        }
    }

    public function getDistrictAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->district;
                }
            }
        }
    }

    public function getComplementAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->complement;
                }
            }
        }
    }

    public function getNumberAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->number;
                }
            }
        }
    }

    public function getStateAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->state;
                }
            }
        }
    }

    public function getCityAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->city;
                }
            }
        }
    }

    public function getZipCodeAttribute()
    {
        if (!empty($this->legal_entity)) {
            if (!empty($this->legal_entity->person)) {
                if (!empty($this->legal_entity->person->address)) {
                    return $this->legal_entity->person->address->zip_code;
                }
            }
        }
    }
}

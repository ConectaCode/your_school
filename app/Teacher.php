<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    /*
     * Attributes Laravel
     */
    protected $fillable = [
        'physical_person_id', 'matter_id'
    ];

    protected $with = [
        'physical_person'
    ];

    /*
     * Relationship
     */
    public function physical_person()
    {
        return $this->belongsTo(PhysicalPerson::class);
    }

    /*
     * Get Mutator
     */

    /**
     * @return int|mixed
     */
    public function getCpfAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->cpf;
        }
    }

    /**
     * @return int|mixed
     */
    public function getRgAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->rg;
        }
    }

    /**
     * @return mixed|string
     */
    public function getDateOfBirthAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->date_of_birth;
        }
    }


    /**
     * @return mixed|string
     */
    public function getNameAttribute()
    {
        if (!empty($this->physical_person)) {
            if (!empty($this->physical_person->person)) {
                return $this->physical_person->person->name;
            }
        }
    }

    /**
     * @return mixed|string
     */
    public function getPhone1Attribute()
    {
        if (!empty($this->physical_person)) {
            if (!empty($this->physical_person->person)) {
                return $this->physical_person->person->phone_1;
            }
        }
    }

    /**
     * @return mixed|string
     */
    public function getPhone2Attribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->phone_2;
        }
    }


    /**
     * @return mixed|string
     */
    public function getPublicPlaceAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->address->public_place;
        }
    }

    /**
     * @return mixed|string
     */
    public function getLocalTypeAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->address->local_type;
        }
    }

    /**
     * @return mixed|string
     */
    public function getDistrictAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->address->district;
        }
    }

    /**
     * @return mixed|string
     */
    public function getComplementAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->address->complement;
        }
    }

    /**
     * @return int|mixed
     */
    public function getNumberAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->address->number;
        }
    }

    /**
     * @return mixed|string
     */
    public function getStateAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->address->state;
        }
    }

    /**
     * @return mixed|string
     */
    public function getCityAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->person->address->city;
        }
    }

    /**
     * @return mixed|string
     */
    public function getZipCodeAttribute()
    {
        if (!empty($this->physical_person)) {
            if (!empty($this->physical_person->person->address)) {
                return $this->physical_person->person->address->zip_code;
            }
        }
    }

    public function getEmailAttribute()
    {
        if (!empty($this->physical_person)) {
            if (!empty($this->physical_person->person)) {
                if (!empty($this->physical_person->person->user)) {
                    return $this->physical_person->person->user->email;
                }
            }
        }
    }
}

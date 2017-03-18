<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name', 'phone_1', 'phone_2', 'address_id', 'user_id'
    ];

    protected $with = [
        'user', 'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function physical_person()
    {
        return $this->hasOne(PhysicalPerson::class);
    }

    public function legal_entity()
    {
        return $this->hasOne(LegalEntity::class);
    }

    /*
     * Mutators
     */


    /**
     * @return mixed|string
     */
    public function getCpfAttribute()
    {
        if (!empty($this->physical_person)) {
            return $this->physical_person->cpf;
        }
    }

    /**
     * @return mixed|string
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
    public function getPublicPlaceAttribute()
    {
        if (!empty($this->address)) {
            return $this->address->public_place;
        }
    }

    /**
     * @return mixed|string
     */
    public function getLocalTypeAttribute()
    {
        if (!empty($this->address)) {
            return $this->address->local_type;
        }
    }

    /**
     * @return mixed|string
     */
    public function getDistrictAttribute()
    {
        if (!empty($this->address)) {
            return $this->address->district;
        }
    }

    /**
     * @return mixed|string
     */
    public function getComplementAttribute()
    {
        if (!empty($this->address)) {
            return $this->address->complement;
        }
    }

    /**
     * @return int|mixed
     */
    public function getNumberAttribute()
    {
        if (!empty($this->address)) {
            return $this->address->number;
        }
    }

    /**
     * @return mixed|string
     */
    public function getStateAttribute()
    {
        if (!empty($this->address->state)) {
            return $this->address->state;
        }
    }

    /**
     * @return mixed|string
     */
    public function getCityAttribute()
    {
        if (!empty($this->address->city)) {
            return $this->address->city;
        }
    }

    /**
     * @return mixed|string
     */
    public function getZipCodeAttribute()
    {
        if (!empty($this->address)) {
            return $this->address->zip_code;
        }
    }
}

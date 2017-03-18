<?php

namespace YourSchool;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'public_place', 'local_type', 'district', 'complement', 'number', 'state', 'city', 'zip_code'
    ];

    public function people()
    {
        return $this->hasMany(Person::class);
    }
}

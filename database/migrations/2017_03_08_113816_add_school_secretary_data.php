<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use YourSchool\Address;
use YourSchool\Person;
use YourSchool\PhysicalPerson;
use YourSchool\SchoolSecretary;
use YourSchool\User;

class AddSchoolSecretaryData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = User::create([
            'email' => 'sec_school@school.com',
            'password' => bcrypt('password')
        ]);

        $address = Address::create([
            'public_place' => 'Rua Edmundo Amorim',
            'local_type' => 'Casa',
            'district' => 'Mecejana',
            'number' => '521',
            'city' => 'Boa Vista',
            'state' => 'Roraima',
            'zip_code' => '69304270'
        ]);

        $person = Person::create([
            'name' => 'Secretario Escolar',
            'phone_1' => '9591567898',
            'user_id' => $user->id,
            'address_id' => $address->id
        ]);

        $physical_person = PhysicalPerson::create([
            'cpf' => '09876543211',
            'rg' => '327434',
            'date_of_birth' => '1998/02/26',
            'person_id' => $person->id
        ]);

        $school_secretary = SchoolSecretary::create([
            'school_id' => 2,
            'physical_person_id' => $physical_person->id
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

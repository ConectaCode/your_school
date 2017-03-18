<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use YourSchool\Address;
use YourSchool\LegalEntity;
use YourSchool\Person;
use YourSchool\School;
use YourSchool\User;

class AddSchoolData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = User::create([
            'email' => 'school@smec.com',
            'password' => bcrypt('secret'),
        ]);

        $address = Address::create([
            'public_place' => 'Rua Eptácio Pessoa',
            'local_type' => 'Prédio Público',
            'district' => 'Mecejana',
            'complement' => '',
            'number' => '1234',
            'state' => 'RR',
            'city' => 'Boa Vista',
            'zip_code' => '69304280',
        ]);

        $person = Person::create([
            'name' => 'Escola Municipal Test 2',
            'phone_1' => '95991377777',
            'phone_2' => '',
            'address_id' => $address->id,
            'user_id' => $user->id,
        ]);

        $legal_entity = LegalEntity::create([
            'cnpj' => '25634786589',
            'ie' => '123434556',
            'foundation_date' => '1999/08/26',
            'person_id' => $person->id,
        ]);

        $school = School::create([
            'legal_entity_id' => $legal_entity->id,
            'secretary_of_education_id' => '1'
        ]);

        $user = User::create([
            'email' => 'school2@smec.com',
            'password' => bcrypt('secret'),
        ]);

        $address = Address::create([
            'public_place' => 'Rua Eptácio Pessoa',
            'local_type' => 'Prédio Público',
            'district' => 'Mecejana',
            'complement' => '',
            'number' => '1234',
            'state' => 'RR',
            'city' => 'Boa Vista',
            'zip_code' => '69304280',
        ]);

        $person = Person::create([
            'name' => 'Escola Municipal Test',
            'phone_1' => '95991377777',
            'phone_2' => '',
            'address_id' => $address->id,
            'user_id' => $user->id,
        ]);

        $legal_entity = LegalEntity::create([
            'cnpj' => '456456547658',
            'ie' => '1234434556',
            'foundation_date' => '1999/08/26',
            'person_id' => $person->id,
        ]);

        $school = School::create([
            'legal_entity_id' => $legal_entity->id,
            'secretary_of_education_id' => '1'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schools', function (Blueprint $table) {
            //
        });
    }
}

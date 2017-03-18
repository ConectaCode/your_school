<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use YourSchool\Address;
use YourSchool\LegalEntity;
use YourSchool\Person;
use YourSchool\SecretaryOfEducation;
use YourSchool\User;

class AddSecretaryOfEducationData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('secretary_of_educations', function (Blueprint $table) {
            $user = User::create([
                'email' => 'smec@smec.com',
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
                'name' => 'Secretaria Municipal de Educação e Cultura Amajari',
                'phone_1' => '95991377777',
                'phone_2' => '',
                'address_id' => $address->id,
                'user_id' => $user->id,
            ]);

            $legal_entity = LegalEntity::create([
                'cnpj' => '12345678901234',
                'ie' => '123456',
                'foundation_date' => '1999/08/26',
                'person_id' => $person->id,
            ]);

            $secretary_of_education = SecretaryOfEducation::create([
                'legal_entity_id' => $legal_entity->id
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('secretary_of_educations', function (Blueprint $table) {
            //
        });
    }
}

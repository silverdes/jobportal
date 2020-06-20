<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrganisationUser;
use Faker\Generator as Faker;

$factory->define(OrganisationUser::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'organisation_id' => $faker->randomDigitNotNull,
        'role' => $faker->word,
        'start_date' => $faker->word,
        'end_date' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

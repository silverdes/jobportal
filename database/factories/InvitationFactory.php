<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Invitation;
use Faker\Generator as Faker;

$factory->define(Invitation::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'sender_contact' => $faker->word,
        'receiver_user_id' => $faker->randomDigitNotNull,
        'organisation_id' => $faker->randomDigitNotNull,
        'job_id' => $faker->randomDigitNotNull,
        'interview_status' => $faker->word,
        'date_of_interview' => $faker->date('Y-m-d H:i:s'),
        'sender_interview_note' => $faker->text,
        'employer_interview_note' => $faker->text,
        'jobseeker_interview_review' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});

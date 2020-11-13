<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Contacts;
use Faker\Generator as Faker;

$factory->define(Contacts::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'country' => $faker->word,
        'title' => $faker->word,
        'content' => $faker->text,
        'status' => $faker->randomDigitNotNull,
        'created_by' => $faker->randomDigitNotNull,
        'updated_by' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

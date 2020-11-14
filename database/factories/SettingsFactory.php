<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Settings;
use Faker\Generator as Faker;

$factory->define(Settings::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'google' => $faker->word,
        'facebook' => $faker->word,
        'disclaimer' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

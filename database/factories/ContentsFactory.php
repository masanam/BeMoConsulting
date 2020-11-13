<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Contents;
use Faker\Generator as Faker;

$factory->define(Contents::class, function (Faker $faker) {

    return [
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'seotitle' => $faker->word,
        'summary' => $faker->text,
        'content' => $faker->text,
        'picture' => $faker->word,
        'picture_description' => $faker->word,
        'tag' => $faker->word,
        'active' => $faker->word,
        'published_at' => $faker->date('Y-m-d H:i:s'),
        'headline' => $faker->randomDigitNotNull,
        'hits' => $faker->randomDigitNotNull,
        'status' => $faker->randomDigitNotNull,
        'created_by' => $faker->randomDigitNotNull,
        'updated_by' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

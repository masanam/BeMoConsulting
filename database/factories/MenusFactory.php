<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Menus;
use Faker\Generator as Faker;

$factory->define(Menus::class, function (Faker $faker) {

    return [
        'parent_id' => $faker->randomDigitNotNull,
        'type' => $faker->randomDigitNotNull,
        'title' => $faker->word,
        'content' => $faker->text,
        'picture' => $faker->word,
        'meta_title' => $faker->text,
        'meta_keyword' => $faker->text,
        'description' => $faker->text,
        'link' => $faker->word,
        'orderid' => $faker->randomDigitNotNull,
        'status' => $faker->randomDigitNotNull,
        'created_by' => $faker->randomDigitNotNull,
        'updated_by' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});

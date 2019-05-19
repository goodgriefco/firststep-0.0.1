<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TaskGroup::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
});

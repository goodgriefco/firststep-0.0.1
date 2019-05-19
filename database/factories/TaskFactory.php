<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'group_id' => $faker->numberBetween(1,5),
        'title' => $faker->sentence,
        'is_complete' => $faker->boolean,
    ];
});

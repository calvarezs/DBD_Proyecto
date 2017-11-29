<?php

use Faker\Generator as Faker;

$factory->define(App\Catastrophe::class, function (Faker $faker) {
    return [
        'catastrophe_name' => $faker->sentence(2),
        'catastrophe_progress' => $faker->randomDigit(),
        'type_catastrophe_id' => $faker->randomDigit(),
    ];
});

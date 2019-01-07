<?php

use App\Models\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'metadata' => [],
        'contact_name' => $faker->name,
        'contact_email' => $faker->email,
        'contact_phone' => $faker->phoneNumber,
        'is_founded' => false,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(App\Booking::class, function (Faker $faker) {
    return [
        'booking_name' => $faker->name,
        'booking_number' => $faker->numberBetween(1, 12),
        'booking_date' => $faker->dateTime(),
    ];
});

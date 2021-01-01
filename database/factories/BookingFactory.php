<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(App\Booking::class, function (Faker $faker) {
    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'date'       => $faker->dateTimeBetween('+1day', '+1year')->format('Y-m-d'),
        'time'       => $faker->time(),
        'people'     => $faker->numberBetween(1, 12),
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'tel'        => $faker->phoneNumber,
        'email'      => $faker->email,
        'comment'    => $faker->sentence,
    ];
});

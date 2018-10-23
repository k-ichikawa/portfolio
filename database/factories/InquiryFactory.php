<?php

use Faker\Generator as Faker;

$factory->define(App\Inquiry::class, function (Faker $faker) {
    return [
        'name'          => $faker->name,
        'mail_address'  => $faker->unique()->safeEmail,
        'message'       => 'message'
    ];
});

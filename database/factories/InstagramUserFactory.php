<?php

use Faker\Generator as Faker;

$factory->define(App\Models\InstagramUser::class, function (Faker $faker) {
    return [
        'user_id'           => 1,
        'user_name'         => 'name',
        'profile_image_url' => 'https://aaa'
    ];
});

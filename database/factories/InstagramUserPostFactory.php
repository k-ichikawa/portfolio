<?php

use Faker\Generator as Faker;

$factory->define(App\Models\InstagramUserPost::class, function (Faker $faker) {
    return [
        'instagram_user_id' => 1,
        'post_id'           => 1,
        'text'              => 'text',
        'post_url'          => 'https://aaaa',
        'post_image_url'    => 'https://aaaaa',
        'like_count'        => 1,
        'posted_at'         => $faker->date
    ];
});

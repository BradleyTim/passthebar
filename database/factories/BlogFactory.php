<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'user_id' => factory(\App\User::class),
        'slug' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});

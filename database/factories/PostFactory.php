<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence,
        'slug' => $faker->sentence,
        'body' => $faker->text(800),
    ];
});

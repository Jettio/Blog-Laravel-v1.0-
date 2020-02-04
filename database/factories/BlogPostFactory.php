<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\BlogPost::class, function (Faker $faker) {
        $title = $faker->sentence(rand(3, 8), true);
        $txt = $faker->realText(rand(1000, 4000));
        $isPublished = rand(1, 5) > 1;

        $created_at = $faker->dateTimeBetween('-3 months', '-2 months');

    return [
        'category_id' => rand(1, 11),
        'user_id' => 1,
        'title'   => $title,
        'slug' => Str::slug($title),
        'excerpt' => $faker->text(rand(40, 100)),
        'content_raw' => $txt,
        'content_html' => $txt,
        'is_published' => $isPublished,
        'published_at' => $isPublished ? $faker->dateTimeBetween('-2 months', '-1 days') : null,
        'created_at' => $created_at,
        'updated_at' => $created_at,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(App\Model\Question::class, function (Faker $faker) {

    $title = $faker->sentence;

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->text,
        'category_id' => function() {
            return Category::all()->random();
        },
        'user_id' => function() {
            return \App\User::all()->random();
        } 
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title_ar' => 'Title_ar',
        'description_ar' => 'Description_ar',
        'title_en' => 'Title_en',
        'description_en' => 'Description_en',
        'photo' => 'avatar.jpg',
    ];
});

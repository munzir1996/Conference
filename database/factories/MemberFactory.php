<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => 'member',
        'email' => 'user@example.com',
        'phone' => '0123456789',
        'country' => 'sudan',
        'education' => 'school',
        'type' => '1'
    ];
});

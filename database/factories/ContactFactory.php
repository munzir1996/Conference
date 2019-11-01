<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => 'contact',
        'email' => 'contact@example.com',
        'join' => 'yes',
        'subject' => 'Testing',
        'message' => 'It works',
    ];
});

$factory->state(App\Concert::class, 'file', function($faker){
    return[
        'file' => 'file.jpg',
    ];
});

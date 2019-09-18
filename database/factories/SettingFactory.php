<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        'logo_ar' => 'logo.png',
        'logo_en' => 'logo-en.png',
        'about_ar' => 'أختبار',
        'about_en' => 'Test',
        'phone' => '111111111',
        'email' => 'Test@test.com',
        'location_ar' => 'موقع',
        'location_en' => 'Location',
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {

    $filename = $faker->numberBetween(1,9). '.png';

    return [
        'path' => "img/products/{$filename}"
    ];
});

$factory->state(Image::class, 'user', function (Faker $faker) {
    $filename = $faker->numberBetween(1,5). '.jpg';
    return [
        'path' => "img/users/{$filename}"
    ];
});

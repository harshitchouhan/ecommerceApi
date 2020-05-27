<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Controllers\Admin\ProductAttribute\ProductAttribute;
use App\Model;
use Faker\Generator as Faker;

$factory->define(ProductAttribute::class, function (Faker $faker) {
    return [
        'paname' => $faker->randomDigit,
        'pavalue' => $faker->randomDigit,
        'padetail' => $faker->paragraph,
        'pafilter' => $faker->randomDigit,
        'pastatus' => $faker->randomElement(['1','0']),
        'paimage' => $faker->randomElement(['img-1.jpg', 'img-2.jpg', 'img-3.jpg']),
        'pacategory' => $faker->randomDigit,
    ];
});

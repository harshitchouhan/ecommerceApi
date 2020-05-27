<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Controllers\Admin\Products\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'pcode' => $faker->randomDigit,
        'pbrandid' => $faker->numberBetween($min = 1, $max = 10),
        'pcategoryid' => $faker->numberBetween($min = 1, $max = 10),
        'pname' => $faker->unique()->word,
        'pdescription' => $faker->paragraph,
        'psellerId' => $faker->randomDigit,
        'pwholesaleprice' => $faker->numberBetween($min = 100, $max = 50000),
        'pretailprice' => $faker->numberBetween($min = 100, $max = 50000),
        'psaleprice' => $faker->numberBetween($min = 100, $max = 50000),
        'pstatus' => $faker->randomElement(['1','0']),
        'pimage1' => $faker->randomElement(['img-1.jpg', 'img-2.jpg', 'img-3.jpg', 'img-4.jpg', 'img-5.jpg']),
        'pimage2' => $faker->randomElement(['img-1.jpg', 'img-2.jpg', 'img-3.jpg', 'img-4.jpg', 'img-5.jpg']),
        'pimage3' => $faker->randomElement(['img-1.jpg', 'img-2.jpg', 'img-3.jpg', 'img-4.jpg', 'img-5.jpg']),
        'pimage4' => $faker->randomElement(['img-1.jpg', 'img-2.jpg', 'img-3.jpg', 'img-4.jpg', 'img-5.jpg']),
        'pimage5' => $faker->randomElement(['img-1.jpg', 'img-2.jpg', 'img-3.jpg', 'img-4.jpg', 'img-5.jpg']),
        'pvideo' => $faker->randomElement(['video-1.mp4', 'video-2.mp4']),
        'pmetatitle' => $faker->paragraph,
        'pmetakeyword' => $faker->word,
        'pmetadescription' => $faker->paragraph,
        'prelatedproducts' => $faker->randomDigit,
    ];
});

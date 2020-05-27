<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Controllers\Admin\OrderCart\OrderCart;
use App\Model;
use Faker\Generator as Faker;

$factory->define(OrderCart::class, function (Faker $faker) {
    return [
        'ocoid' => $faker->randomDigit,
        'ocpid' => $faker->randomDigit,
        'ocpname' => $faker->name(),
        'ocpcode' => $faker->randomDigit,
        'ocprice' => $faker->randomDigit,
    ];
});

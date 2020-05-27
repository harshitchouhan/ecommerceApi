<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Controllers\Admin\Orders\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    return [
        'ocustomername' => $faker->name(),
        'ocid' => $faker->randomNumber(),
        'oemail' => $faker->email,
        'oaddressline1' => $faker->streetAddress,
        'oaddressline2' => $faker->streetAddress,
        'ocity' => $faker->randomNumber(),
        'ostate' => $faker->randomNumber(),
        'ozipcode' => $faker->randomNumber(),
        'ostatus' => $faker->randomElement(['not paid', 'paid', 'shipped', 'completed']),
        'ophone' => $faker->e164PhoneNumber,
        'oalternatephone' => $faker->e164PhoneNumber,
        'odiscountid' => $faker->randomDigit,
        'odiscountvalue' => $faker->randomDigit,
        'ototalprice' => $faker->randomDigit,
        'oshippingprice' => $faker->randomDigit,
        'oshippingid' => $faker->randomDigit,
        'oshippingcode' => $faker->randomDigit,
        'ograndtotal' => $faker->randomDigit,
        'opaymenttype' => $faker->randomElement(['cod', 'card']),
        'opaymentrequest' => $faker->sentence(),
        'opaymentresponse' => $faker->sentence(),
        'opaymentstatus' => $faker->randomElement(['1', '0']),
        'opaymentauthroized' => $faker->sentence(),
        'oisgifted' => $faker->randomElement(['1', '0']),
    ];
});

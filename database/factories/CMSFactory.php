<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Controllers\Admin\CMS\cms;
use Faker\Generator as Faker;

$factory->define(cms::class, function (Faker $faker) {
    return [
        'cpagetitle' => $faker->name(),
        'cpagedescription' => $faker->sentence(),
        'ctemplate' => $faker->sentence(),
        'cpageurl' => $faker->sentence(),
        'cmetatitle' => $faker->sentence(),
        'cmetadecription' => $faker->sentence(),
        'cmetakeyword' => $faker->sentence(),
        'cactive' => $faker->randomElement(['1', '0']),
    ];
});

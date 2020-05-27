<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Controllers\Admin\CMS\CMS;
use Faker\Generator as Faker;

$factory->define(CMS::class, function (Faker $faker) {
    return [
        'cpagetitle' => $faker->unique()->word,
        'cpagedescription' => $faker->paragraph,
        'ctemplate' => $faker->name(),
        'cpageurl' => $faker->sentence(),
        'cmetatitle' => $faker->unique()->word,
        'cmetadecription' => $faker->paragraph,
        'cmetakeyword' => $faker->unique()->word,
        'cactive' => $faker->randomElement(['1', '0']),
    ];
});

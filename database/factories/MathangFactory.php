<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mathang;
use Faker\Generator as Faker;

$factory->define(Mathang::class, function (Faker $faker) {
    return [
        'TenMH'=>$faker->company,
        'MauSac'=>$faker->colorName,


    ];
});

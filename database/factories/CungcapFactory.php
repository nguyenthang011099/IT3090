<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cungcap;
use Faker\Generator as Faker;

$factory->define(Cungcap::class, function (Faker $faker) {

    $p=$faker->numberBetween(10,10000);
    return [
        'MSMH'=>$faker->numberBetween(1000,10000),
        'Price'=>$p.'0.000',
    ];
});

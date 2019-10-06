<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nhacungcap;
//use Faker\Generator as Faker;
use Faker\Factory as Faker;
$factory->define(Nhacungcap::class, function ($faker) {
   $faker= Faker::create('vi_VN');


    return [
        'TenNCC'=>$faker->catchPhrase,
        'DiaChi'=>$faker->city
    ];

});

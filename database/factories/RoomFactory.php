<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
//        'name'=>$faker->numberBetween($min = 1, $max = 10),
//        'total_seat'=>220,
//        'desc'=>$faker->word,
//        'cinema_id'=>$faker->unique(true)->numberBetween($min = 1, $max = 10),
    ];
});

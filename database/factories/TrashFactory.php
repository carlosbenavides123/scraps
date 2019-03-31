<?php

use Faker\Generator as Faker;




$factory->define(App\Trash::class, function (Faker $faker) {
    $url = "http://scrapslahacks2019.s3-us-west-2.amazonaws.com/trash2_1553989751.jpg";
    return [
        'lat' => $faker->randomFloat($nbMaxDecimals = 8, $min = 32.063000, $max = 34.500000),
        'lng' => $faker->randomFloat($nbMaxDecimals = 8, $min = -117.439670, $max = -119.639670),
        'size' => $faker->numberBetween(1, 10),
        'url' => $url
    ];
});

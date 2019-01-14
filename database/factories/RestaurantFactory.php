<?php

use Faker\Generator as Faker;

$factory->define(App\restaurant::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(['1','2','3', '4', '5']),
       'nombre'  => $faker->word(2),
       'descripcion' => $faker->text(10),
       'imagenRuta' => $faker->imageUrl($width = 600, $height = 200),
    ];
});

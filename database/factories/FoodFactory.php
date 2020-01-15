<?php

use Faker\Generator as Faker;

$factory->define(App\Food::class, function (Faker $faker) {
    $ingredientsList = [
        'papa', 'crema', 'zapallo', 'puerro', 'lenteja', 'huevo', 'comino'
    ];

    $ingredients = collect(1, 3)->map( function() use ($faker, $ingredientsList) {
        return $ingredientsList[array_rand($ingredientsList)];
    })->toArray();

    return [
        'name' => $faker->word,
        'chef' => $faker->name,
        'count' => $faker->randomDigit,
        'last_time' => $faker->date,
        // 'requeriments' => ['ingredients' => $ingredients]
    ];
});

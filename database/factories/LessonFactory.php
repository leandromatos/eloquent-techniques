<?php

$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    $difficulties = ['beginner', 'intermediate', 'advanced'];

    return [
        'title'      => $faker->sentence,
        'body'       => $faker->paragraph,
        'views'      => rand(1, 1000),
        'length'     => rand(240, 2400),
        'difficulty' => $difficulties[array_rand($difficulties)],
    ];
});

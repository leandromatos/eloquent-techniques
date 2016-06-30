<?php

$factory->define(App\Document::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'body'  => $faker->paragraph,
    ];
});

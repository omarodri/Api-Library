<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title'     => $faker->sentence,
        'author'    => $faker->name,
        'genre'     => $faker->randomElement(['Sci-Fic','Romance','History','Narratif','Biography','Mystery']),
        'year'      => $faker->date('Y-m-d'),
        'summary'   => $faker->text,
        'user_id'   => $faker->numberBetween(1, 5)
    ];
});

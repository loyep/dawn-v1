<?php

use App\Models\Meta\Meta;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| BaseModel Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Meta::class, function (Faker $faker) {
    return [
        'key'        => $faker->unique()->word,
    ];
});

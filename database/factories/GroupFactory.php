<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Group;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Group::class, function (Faker $faker) {

    $name = 'Group '.$faker->numberBetween(1, 100);
    $slug = str_slug($name);

    return [
        'name' => $name,
        'desc' => $faker->sentence(),
        'slug' => $slug,
        'type' => 'vip',
    ];
});

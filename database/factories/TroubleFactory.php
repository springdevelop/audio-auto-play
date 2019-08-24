<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Device;
use App\Models\Trouble;
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

$factory->define(Trouble::class, function (Faker $faker) {	

	$userIds = App\Models\User::pluck('id')->toArray();
    $deviceIds = App\Models\Device::pluck('id')->toArray();

    shuffle($userIds);
    shuffle($deviceIds);

    $name = 'Trouble '.$faker->numberBetween(1, 100);

    return [
        'name' => $name,
        'desc' => $faker->unique()->safeEmail,
        'devices_id' => $deviceIds[0],
    ];
});

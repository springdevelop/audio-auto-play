<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Position;
use App\Models\Calendar;
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

$factory->define(Calendar::class, function (Faker $faker) {

    $userIds = App\Models\User::pluck('id')->toArray();
    $positionIds = App\Models\Position::pluck('id')->toArray();

    shuffle($userIds);
    shuffle($positionIds);

    $name = 'Calendar '.$faker->numberBetween(1, 100);

    return [
        'name' => $name,
        'desc' => $faker->sentence(),
        'audio' => 'http://api.audio.com/mp3/s1.mp3',
        'time_from' => now(),
        'time_to' => now(),
        'positions_id' => $userIds[0],
        'users_id' => $positionIds[0],
        'status' => config('tables.calendars.status.pending'),
    ];
});

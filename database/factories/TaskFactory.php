<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Trouble;
use App\Models\Task;
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

$factory->define(Task::class, function (Faker $faker) {

	$userIds = App\Models\User::pluck('id')->toArray();
    $troubleIds = App\Models\Trouble::pluck('id')->toArray();

    shuffle($userIds);
    shuffle($troubleIds);

    $name = 'Task '.$faker->numberBetween(1, 100);
    $slug = str_slug($name);    

    return [
        'name' => $name,
        'desc' => $faker->sentence(),
        'time_from' => now(),
        'time_to' => now(),
        'users_id' => $userIds[0],
        'troubles_id' => $troubleIds[0],
        'status' => config('tables.taks.status.pending'),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Group;
use App\Models\Position;
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

$factory->define(Position::class, function (Faker $faker) {
	$userIds = App\Models\User::pluck('id')->toArray();
    $groupIds = App\Models\Group::pluck('id')->toArray();

    shuffle($userIds);
    shuffle($groupIds);

    $name = 'Position '.$faker->numberBetween(1, 100);

    return [
        'name' => $name,
        'parent_id' => 1,
        'desc' => $faker->sentence(),
        'users_id' => $userIds[0],
        'groups_id' => $groupIds[0],
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use App\Models\Group;
use App\Models\Position;
use App\Models\Device;
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

$factory->define(Device::class, function (Faker $faker) {

	$userIds = App\Models\User::pluck('id')->toArray();
    $groupIds = App\Models\Group::pluck('id')->toArray();
    $positionIds = App\Models\Position::pluck('id')->toArray();
    shuffle($userIds);
    shuffle($groupIds);
    shuffle($positionIds);

    $name = 'Device '.$faker->numberBetween(1, 100);
    $slug = str_slug($name);

    return [
        'name' => $name,
        'desc' => $faker->unique()->safeEmail,
        'slug' => $slug,
        'positions_id' => $groupIds[0],
        'users_id' => $userIds[0],
        'groups_id' => $groupIds[0],
        'status' => config('tables.devices.status.good'),
    ];
});

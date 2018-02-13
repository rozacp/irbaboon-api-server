<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function(Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => encrypt('secret'),
        'remember_token' => str_random(10),
        'api_key' => str_random(150),
    ];
});

$factory->define(App\Room::class, function(Faker\Generator $faker) {

    return [
        // 'number' => $i,
        'uuid' => 'uuid_' . str_random(7),
        'socket_id' => str_random(15),
        'ac_model_id' => $faker->numberBetween(1,3),
        'room_temp' => $faker->numberBetween(16,31),
        'status' => $faker->boolean
    ];
});

$factory->define(App\Hvac::class, function(Faker\Generator $faker) {

    return [
        'flow' => $faker->numberBetween(0,10),
        'finished' => $faker->boolean
    ];
});


$factory->define(App\RoomAc::class, function(Faker\Generator $faker) {

    return [
        'power' => $faker->boolean,
        'mode' => 'heat',
        'fan' => $faker->numberBetween(1,4),
        'vane' => 'cycle',
        'temp' => $faker->numberBetween(16,31)
    ];
});

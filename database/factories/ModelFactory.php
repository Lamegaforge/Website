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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\VideoChannel::class, function (Faker\Generator $faker) {
    return [
        'name' =>  $faker->name,
        'slug_name' =>  $faker->slug,
        'youtube_id' =>  $faker->name,
        'description' => $faker->text,
    ];
});

$factory->define(App\Models\Video::class, function (Faker\Generator $faker) {
    return [
        'youtube_id' => $faker->name,
        'title' => $faker->name,
        'description' => $faker->text,
        'view_count' => $faker->numberBetween(1000, 5000),
        'like_count' => $faker->numberBetween(10, 200),
        'online' => $faker->boolean ,
        'published_at' => $faker->dateTime('now'),
    ];
});

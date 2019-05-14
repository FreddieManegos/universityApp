<?php

use App\User;
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

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'img' => 'img/pic.png',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(\App\Course::class, function (Faker $faker) {
    return [
        'code' => $faker->word,
        'title' => $faker->word,
        'description' => $faker->sentence,
        'section' => $faker->word,
        'starttime' => $faker->time('H:i:s'),
        'endtime' => $faker->time('H:i:s'),
        'roomnumber' => $faker->word,
    ];
});

$factory->define(\App\Threads::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'course_id' => 2,
        'title' => $faker->word,
        'body' => $faker->sentence,
    ];
});








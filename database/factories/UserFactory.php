<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Role;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Mohammad Prince',
        'email' => 'mprince2k16@gmail.com',
        'email_verified_at' => now(),
        'password' => '12345678', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Role::class, function (Faker $faker) {
    return [
        'role_name' => 'Employee',
        'role_details' => 'Employee',
        'created_at'  =>Carbon::now()
    ];
});

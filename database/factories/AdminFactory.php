<?php

use Illuminate\Support\Str;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Support\Facades\Hash;

$factory->define(Admin::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => Hash::make('admin'), //admin
        // 'password'       => 'secret', //secret
        'remember_token' => Str::random(10),
        'active'         => true,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Contacts;
use Faker\Generator as Faker;

$factory->define(Contacts::class, function (Faker $faker) {

    $faker->addProvider(new Ottaviano\Faker\Gravatar($faker));

    
    return [
        //
        'avatar' => $faker->gravatarUrl(),
        'first_name' => $faker->text(10),
        'last_name' => $faker->text(10),
        'address' => $faker->address(10),
        'city' => $faker->city(10),
        'zip' => $faker->postcode(10),
        'country' => $faker->country(10),
        'email' => $faker->email(10),
        'phone' => $faker->numberBetween($min = 100000, $max = 999999) ,
        'note' => $faker->text(10),
        'group_id' => $faker->numberBetween($min = 1, $max = 3),
        'created_at' => $faker->dateTime()
    ];
});

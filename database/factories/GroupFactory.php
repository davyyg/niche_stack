<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Groups;
use Faker\Generator as Faker;

$factory->define(Groups::class, function (Faker $faker) {
    return [
        //
        'group_name' => $faker->text(10)
    ];
});

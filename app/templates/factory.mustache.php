<?php

use {{model}};
use Faker\Generator as Faker;
    $factory->define({{model}}::class, function (Faker $faker) {
        return [
            'key' => Str::slug($faker->sentence),
            'value' => $faker->sentence,
        ];
});

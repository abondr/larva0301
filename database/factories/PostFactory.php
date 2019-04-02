<?php

use Faker\Generator as Faker;
use App\Post as Model;
$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(rand(3,8)),
        'body' => $faker->paragraphs(rand(1,3),true),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    ];
});

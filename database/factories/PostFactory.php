<?php

use Faker\Generator as Faker;
use App\Post as Model;
$factory->define(Model::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3,8));
    return [
        'title'=> $title,
        "slug" => str_slug($title),
        'body' => $faker->paragraphs(rand(1,3),true),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Name::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'description'=>$faker->text,
        'user_id'=>1,
        'upvotes'=>random_int(1,10000),
        'downvotes'=>random_int(1,10000),
        'comment_count'=>random_int(1,10000),
    ];

});

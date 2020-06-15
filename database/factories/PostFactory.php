<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $num = rand(0, 100);
    return [
    //
    'title' => $faker->sentence,
    'content' => $faker->paragraph,
    'user_id' => factory(App\User::class),
    'published'=>false,
    'cover_image'=>"https://picsum.photos/id/$num/500/400"
  ];
});

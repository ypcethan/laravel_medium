<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Post', 20)->create();
        $superUser = App\User::where('name', 'ethan')->get()->first();

        factory('App\Post', 10)->create(['user_id' => $superUser->id]);
        factory('App\Post', 10)->create(['user_id' => $superUser->id, 'published' => true]);
    }
}

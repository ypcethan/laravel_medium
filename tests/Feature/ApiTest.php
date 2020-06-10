<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function an_authenticated_user_can_clap_a_post()
    {
        $this->withExceptionHandling();
        $user = factory('App\User')->create();
        $post = factory('App\Post')->create();
        // dd(route('clap-store', ['post' => $post]));
        $this->actingAs($user)->post(route('clap-store', ['post' => $post]));

        $this->assertEquals($post->clappedUsers()->first()->id, $user->id);
        $this->assertEquals($user->claps()->first()->id, $post->id);

        $this->assertDatabaseHas('claps', [
            'post_id' => $post->id,
            'user_id' => $user->id
        ]);
    }
}

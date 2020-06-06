<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManagePostsTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /** @test */
    public function unauthenticated_user_cannot_view_home_page()
    {
        /* $this->withoutExceptionHandling(); */
        $attributes = factory('App\Post')->raw();
        $this->get(route('home'))->assertRedirect('login');
    }

    /** @test */
    public function unauthenticated_user_cannot_view_a_single_post()
    {
        $post = factory('App\Post')->create();
        $this->get($post->path())->assertRedirect('login');
    }

    /** @test */
    public function anthenticated_user_cannot_cannot_view_the_welcome_page()
    {
        $this->signIn();
        $this->get(route('welcome'))->assertRedirect(route('home'));
    }
}

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

        /* $post = factory('App\') */
    /* $this->get('') */
    }
}

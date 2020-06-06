<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserProfileTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function profile_page_exists()
    {
        $this->withExceptionHandling();
        $user = factory('App\User')->create();
        $this->actingAs($user)->get(route('profile-index', ['user' => $user->username]))->assertOk();
    }
}

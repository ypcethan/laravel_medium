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
        $user = factory('App\User')->create();
        $this->actingAs($user)->get(route('profile-index', ['user' => $user->username]))->assertOk();
    }

    /** @test */
    public function authenticated_user_get_redirect_to_own_profile_edit_page()
    {
        $user1 = factory('App\User')->create();
        $user2 = factory('App\User')->create();
        $this->actingAs($user1)->get(route('profile-edit', ['user' => $user2->username]))->assertRedirect(route('profile-edit', ['user' => $user1->username]));
    }

    /** @test */
    public function authenticated_user_can_update_own_info()
    {
        $user = factory('App\User')->create();
        $attributes = ['username' => 'Change'];
        $this->actingAs($user)
            ->patch(route('profile-update', ['user' => $user]), $attributes)->assertRedirect(route('profile-index', ['user' => $attributes['username']]));
        $this->assertDatabaseHas('users', $attributes);
    }
}

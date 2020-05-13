<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountTests extends TestCase
{
    use WithFaker, RefreshDatabase;
    /** @test */
    public function it_redirect_to_home_page_with_username()
    {
        $this->withoutExceptionHandling();
        $attributes = factory('App\User')->raw([
      'password' => 'passwordtest',
      'password_confirmation' => 'passwordtest'
    ]);


        $this->post(route('register', $attributes))->assertRedirect(route('home'));
    }
}

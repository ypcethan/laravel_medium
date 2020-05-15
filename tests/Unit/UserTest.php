<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /** @test */
    public function it_has_many_posts()
    {
        $user = factory('App\User')->create();

        $this->assertInstanceOf(Collection::class, $user->posts);
    }


    /** @test */
    public function it_has_many_follows()
    {
        $user = factory('App\User')->create();

        $this->assertInstanceOf(Collection::class, $user->follows);
    }

    /** @test */
    public function it_can_follow_other_user()
    {
        $user = factory('App\User')->create();
        $user2 = factory('App\User')->create();

        $user->follow($user2);
        $this->assertTrue($user->following($user2));
    }
    /** @test */
    public function it_can_unfollow_other_user()
    {
        $user = factory('App\User')->create();
        $user2 = factory('App\User')->create();

        $user->follow($user2);
        $this->assertTrue($user->following($user2));

        $user->unfollows($user2);
        $this->assertFalse($user->following($user2));
    }
}

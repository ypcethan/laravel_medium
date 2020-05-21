<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Post;
use App\User;

class CommentTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function it_belongs_to_a_post_and_a_user()
    {
        $comment = factory("App\Comment")->create();
        $this->assertInstanceOf(Post::class, $comment->post);
        $this->assertInstanceOf(User::class, $comment->user);
    }
}
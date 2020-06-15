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
    public function anthenticated_user_cannot_view_the_welcome_page()
    {
        $this->signIn();
        $this->get(route('welcome'))->assertRedirect(route('home'));
    }

    /** @test */
    public function anthenticated_user_can_create_a_post()
    {
        $this->signIn();
        $postData = factory('App\Post')->raw(['user_id'=>auth()->user()->id]);
        $this->post(route('post-store'), $postData);
        $this->assertDatabaseHas('posts', $postData);
    }

    /** @test */
    public function unanthenticated_user_cannot_create_a_post()
    {
        $postData = factory('App\Post')->raw();
        $this->post(route('post-store'), $postData)->assertRedirect(route('login'));
    }

    /** @test */
    public function publish_a_post_should_redirect_to_post_page()
    {
        $this->signIn();
        $postData = factory('App\Post')
        ->raw(['user_id'=>auth()->user()->id, 'published'=>true]);
        $response = $this->post(route('post-store'), $postData);
        $post = auth()->user()->posts[0];
        $response->assertRedirect(route('posts-show', ['user'=>$post->user , 'post'=>$post]));
    }
    /** @test */
    public function draft_a_post_should_redirect_to_user_own_post_page()
    {
        $this->signIn();
        $postData = factory('App\Post')
            ->raw(['user_id'=>auth()->user()->id, 'published'=>false]);
        $response = $this->post(route('post-store'), $postData);
        $response->assertRedirect(route('own-posts-show', ['state'=>'drafts']));
    }

    /** @test */
    public function edit_a_post_to_as_draft_should_redirect_to_user_own_post_page()
    {
        $this->signIn();
        $postData = factory('App\Post')
                ->raw(['user_id'=>auth()->user()->id, 'published'=>true]);
        $this->post(route('post-store'), $postData);
        $post = auth()->user()->posts[0];

        $postData['published'] = false;
        $response= $this->patch(route('post-update', ['post'=>$post]), $postData);
        $response->assertRedirect(route('own-posts-show', ['state'=>'drafts']));
        $this->assertDatabaseHas('posts', $postData);
    }
}

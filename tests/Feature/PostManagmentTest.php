<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Post;

class PostManagmentTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function list_of_posts_can_be_retrieved()
    {
        $this->withoutExceptionHandling();
        factory(Post::class, 3)->create(); // test data

        $response = $this->get('/posts'); // call action

        $response->assertOk();
        $posts = Post::all();

        $response->assertViewIs('posts.index');
        $response->assertViewHas('posts', $posts);
    }

    /** @test */
    public function a_post_can_be_retrieved()
    {
        $this->withoutExceptionHandling();
        $post = factory(Post::class)->create(); // test data

        $response = $this->get('/post/' . $post->id); // call action

        $response->assertOk();
        $post = Post::first();
        
        $response->assertViewIs('posts.show');
        $response->assertViewHas('post', $post);
    }

    /** @test */
    public function a_post_can_be_created()
    {

        $this->withoutExceptionHandling();

        $response = $this->post('/posts', [
            'title' => 'Test title',
            'content' => 'Test Content'
        ]);

        $this->assertTrue(true);
        $this->assertCount(1, Post::all());

        $post = Post::first();

        $this->assertEquals($post->title, 'Test title');
        $this->assertEquals($post->content, 'Test Content');
    }
}

<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostsApiTest extends TestCase
{
    use MakePostsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePosts()
    {
        $posts = $this->fakePostsData();
        $this->json('POST', '/api/v1/posts', $posts);

        $this->assertApiResponse($posts);
    }

    /**
     * @test
     */
    public function testReadPosts()
    {
        $posts = $this->makePosts();
        $this->json('GET', '/api/v1/posts/'.$posts->id);

        $this->assertApiResponse($posts->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePosts()
    {
        $posts = $this->makePosts();
        $editedPosts = $this->fakePostsData();

        $this->json('PUT', '/api/v1/posts/'.$posts->id, $editedPosts);

        $this->assertApiResponse($editedPosts);
    }

    /**
     * @test
     */
    public function testDeletePosts()
    {
        $posts = $this->makePosts();
        $this->json('DELETE', '/api/v1/posts/'.$posts->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/posts/'.$posts->id);

        $this->assertResponseStatus(404);
    }
}

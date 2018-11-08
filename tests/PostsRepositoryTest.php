<?php

use App\Models\Post;
use App\Repositories\PostsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostsRepositoryTest extends TestCase
{
    use MakePostsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PostsRepository
     */
    protected $postsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->postsRepo = App::make(PostsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePosts()
    {
        $posts = $this->fakePostsData();
        $createdPosts = $this->postsRepo->create($posts);
        $createdPosts = $createdPosts->toArray();
        $this->assertArrayHasKey('id', $createdPosts);
        $this->assertNotNull($createdPosts['id'], 'Created Post must have id specified');
        $this->assertNotNull(Post::find($createdPosts['id']), 'Post with given id must be in DB');
        $this->assertModelData($posts, $createdPosts);
    }

    /**
     * @test read
     */
    public function testReadPosts()
    {
        $posts = $this->makePosts();
        $dbPosts = $this->postsRepo->find($posts->id);
        $dbPosts = $dbPosts->toArray();
        $this->assertModelData($posts->toArray(), $dbPosts);
    }

    /**
     * @test update
     */
    public function testUpdatePosts()
    {
        $posts = $this->makePosts();
        $fakePosts = $this->fakePostsData();
        $updatedPosts = $this->postsRepo->update($fakePosts, $posts->id);
        $this->assertModelData($fakePosts, $updatedPosts->toArray());
        $dbPosts = $this->postsRepo->find($posts->id);
        $this->assertModelData($fakePosts, $dbPosts->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePosts()
    {
        $posts = $this->makePosts();
        $resp = $this->postsRepo->delete($posts->id);
        $this->assertTrue($resp);
        $this->assertNull(Post::find($posts->id), 'Post should not exist in DB');
    }
}

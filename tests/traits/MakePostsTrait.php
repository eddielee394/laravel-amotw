<?php

use Faker\Factory as Faker;
use App\Models\Post;
use App\Repositories\PostsRepository;

trait MakePostsTrait
{
    /**
     * Create fake instance of Post and save it in database
     *
     * @param array $postsFields
     *
     * @return Post
     */
    public function makePosts($postsFields = [])
    {
        /** @var PostsRepository $postsRepo */
        $postsRepo = App::make(PostsRepository::class);
        $theme = $this->fakePostsData($postsFields);
        return $postsRepo->create($theme);
    }

    /**
     * Get fake instance of Post
     *
     * @param array $postsFields
     *
     * @return Post
     */
    public function fakePosts($postsFields = [])
    {
	    return new Post($this->fakePostsData($postsFields));
    }

    /**
     * Get fake data of Post
     *
     * @param array $postFields
     * @return array
     */
    public function fakePostsData($postsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'body' => $fake->text,
            'user_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $postsFields);
    }
}

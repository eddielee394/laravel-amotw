<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePostsAPIRequest;
use App\Http\Requests\API\UpdatePostsAPIRequest;
use App\Models\Post;
use App\Repositories\PostsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PostsController
 * @package App\Http\Controllers\API
 */

class PostsAPIController extends AppBaseController
{
    /** @var  PostsRepository */
    private $postsRepository;

    public function __construct(PostsRepository $postsRepo)
    {
        $this->postsRepository = $postsRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/posts",
     *      summary="Get a listing of the Post.",
     *      tags={"Post"},
     *      description="Get all Post",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Post")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->postsRepository->pushCriteria(new RequestCriteria($request));
        $this->postsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $posts = $this->postsRepository->all();

        return $this->sendResponse($posts->toArray(), 'Post retrieved successfully');
    }

    /**
     * @param CreatePostsAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/posts",
     *      summary="Store a newly created Post in storage",
     *      tags={"Post"},
     *      description="Store Post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Post that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Post")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Post"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatePostsAPIRequest $request)
    {
        $input = $request->all();

        $posts = $this->postsRepository->create($input);

        return $this->sendResponse($posts->toArray(), 'Post saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/posts/{id}",
     *      summary="Display the specified Post",
     *      tags={"Post"},
     *      description="Get Post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Post",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Post"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Post $posts */
        $posts = $this->postsRepository->findWithoutFail($id);

        if (empty($posts)) {
            return $this->sendError('Post not found');
        }

        return $this->sendResponse($posts->toArray(), 'Post retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatePostsAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/posts/{id}",
     *      summary="Update the specified Post in storage",
     *      tags={"Post"},
     *      description="Update Post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Post",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Post that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Post")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Post"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatePostsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Post $posts */
        $posts = $this->postsRepository->findWithoutFail($id);

        if (empty($posts)) {
            return $this->sendError('Post not found');
        }

        $posts = $this->postsRepository->update($input, $id);

        return $this->sendResponse($posts->toArray(), 'Post updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/posts/{id}",
     *      summary="Remove the specified Post from storage",
     *      tags={"Post"},
     *      description="Delete Post",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Post",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Post $posts */
        $posts = $this->postsRepository->findWithoutFail($id);

        if (empty($posts)) {
            return $this->sendError('Post not found');
        }

        $posts->delete();

        return $this->sendResponse($id, 'Post deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Repositories\PostsRepository;
use Flash;
use Response;
use Prettus\Repository\Criteria\RequestCriteria;

class PostController extends AppBaseController
{
    /** @var  PostsRepository */
    private $postsRepository;

    public function __construct(PostsRepository $postsRepo)
    {
        $this->postsRepository = $postsRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $this->postsRepository->pushCriteria(new RequestCriteria($request));
        $data['posts'] = $this->postsRepository
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostsRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreatePostsRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = $request->user()->id;

        $this->postsRepository->create($data);

        Flash::success('Post saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $data['posts'] = $this->postsRepository->findWithoutFail($id);

        if ($data['posts'] === null) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $data['posts'] = $this->postsRepository->findWithoutFail($id);

        if ($data['posts'] === null) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit', $data);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int               $id
     * @param UpdatePostsRequest $request
     *
     * @return Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($id, UpdatePostsRequest $request)
    {
        $posts = $this->postsRepository->findWithoutFail($id);

        if ($posts) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $posts = $this->postsRepository->update($request->all(), $id);

        Flash::success('Post updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $posts = $this->postsRepository->findWithoutFail($id);

        if ($posts === null) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $this->postsRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('posts.index'));
    }
}

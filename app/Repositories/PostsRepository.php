<?php

namespace App\Repositories;

use App\Models\Post;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostsRepository
 *
 * @package App\Repositories
 * @version November 8, 2018, 12:25 am UTC
 *
 * @method Post findWithoutFail($id, $columns = ['*'])
 * @method Post find($id, $columns = ['*'])
 * @method Post first($columns = ['*'])
 */
class PostsRepository extends BaseRepository
{
    /**
     * @var array
     */
    //    protected $fieldSearchable = [
    //        'user_id'
    //    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }

}

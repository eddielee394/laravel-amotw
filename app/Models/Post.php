<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public $fillable = ['body', 'user_id'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'body' => 'string'
    ];

    /**
     * User Relationship
     * @uses \App\Models\User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Gets created_at timestamp relative to now
     * @uses \Carbon\Carbon
     * @return mixed
     */
    public function getCreatedAtRelativeAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name' ,'email' , 'comment'
    ];

    /**
    * Get the post that owns the Comment
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function post()
    {
    return $this->belongsTo('App\Models\Post');
    }

    /**
     * Get the user that owns the Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    use HasFactory;
}

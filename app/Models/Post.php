<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Post extends Model
{
    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'posts.title' => 10,
            'posts.content' => 10,
        ]
    ];

    protected $fillable = [
        'title', 'content', 'image', 'category_id', 'slug', 'user_id'
    ];

    public function category()
    {
        # code...
        return $this->belongsTo('App\Models\Category');
    }

    public function tags()
    {
        # code...
        return $this->belongsToMany('App\Models\Tag');
    }

    public function user()
    {
        # code...
        return $this->belongsTo('App\Models\User');
    }

    public function  PostTags($tag){
        return null !== $this->tags()->where('name', $tag)->first();
    }

    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    // public function PostCategory($category){
    //     return null !==  $this->categories()->where('category_id', $category)->first();
    // }
    
    use HasFactory;
}

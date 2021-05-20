<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable =[
        'name' , 'slug'
    ];
    
    public function post()
    {
        return $this->belongsToMany('App\Models\Post');
    }


    public function  PostTags($post){
        return null !== $this->post()->where('name', $tag)->first();
    }
    
    use HasFactory;
}

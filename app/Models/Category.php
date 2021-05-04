<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'name' , 'slug'
    ];
    
    public function posts()
    {
        # code...
        return $this->belongsToMany('App\Models\Post');
    }

    public function properties()
    {
        # code...
        return $this->belongsToMany('App\Models\Property');
    }
    // public function PostCategory($category){
    //     return null !==  $this->posts()->where('name', $category)->first();
    // }
    
    use HasFactory;
}

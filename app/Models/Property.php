<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; 
use Nicolaslopezj\Searchable\SearchableTrait;

class Property extends Model
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
            'properties.city' => 10,
            'properties.province' => 10,
            'properties.street' => 10,
            'properties.title' => 10,
            'properties.price' => 5,
            'properties.details' => 2,
            'properties.description' => 1,
        ]
    ];


    protected $fillable =[
        'title', 'street', 'city', 'province','category_id', 'price', 'status', 'details', 'image' , 'slug'
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    // public function presentPrice(){
    //     return money_format('$%i', $this->price / 10);
    // }


    use HasFactory;
}

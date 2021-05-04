<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Post;
use \Illuminate\Support\Str;

class PageController extends Controller
{
    //
    public function index()
    {

        return view('home')->with([
            'posts' => Post::orderBy('created_at', 'desc')->latest()->take(3)->get(),
            'properties' => Property::orderBy('created_at', 'desc')->latest()->take(4)->get()
        ]);
    }

    //properties
    public function properties()
    {
        return view('properties')->with([
            'properties' => Property::paginate(8),
            'relatedProperties' =>Property::inRandomOrder()->take(4)->get()
        ]);
    }

    //single Property
    public function property()
    {
        return view('properties')->with([
            'properties' => Property::paginate(8),
            'relatedProperties' =>Property::inRandomOrder()->take(4)->get()
        ]);
    }
}

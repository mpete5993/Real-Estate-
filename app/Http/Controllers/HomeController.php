<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Post;
use \Illuminate\Support\Str;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::inRandomOrder()->take(4)->get();

        return view('home')->with([
            'posts' => Post::orderBy('created_at', 'desc')->first()->take(3)->get(),
            'properties' => $properties
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use \Illuminate\Support\Str;
use Nicolaslopezj\Searchable\SearchableTrait;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //filter by categories
        if(request()->category){
            $posts= Post::with('category')->whereHas('category', function($query){
                $query->where('slug', request()->category);
            })->get();

            $categories =  Category::all();
            $tags =  Tag::all();
            $popularPosts = Post::inRandomOrder()->take(3)->get();

        }//filter by Tags
        elseif(request()->tag)
        {
            $posts= Post::with('tags')->whereHas('tags', function($query){
                $query->where('slug', request()->tag);
            })->get();

            $categories =  Category::all();
            $tags =  Tag::all();
            $popularPosts = Post::inRandomOrder()->take(3)->get();

        }else {

            $posts =  Post::orderBy('created_at', 'desc')->latest()->paginate(4);
            $categories =  Category::all();
            $tags =  Tag::all();
            $popularPosts = Post::inRandomOrder()->take(3)->get();

        }

        return view('blog')->with([
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'popularPosts' => $popularPosts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  slug  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post')->with([
            'post' => $post,
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'popularPosts' => Post::inRandomOrder()->take(3)->get(),
            'comments' => $post->comments()->paginate(4)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //post search
    public function search(Request  $request)
    {
        $request->validate([
            'postsearch' => 'required|min:3'
        ]);
        $postsearch = $request->input('postsearch');
        $posts = Post::search($postsearch)->paginate(10);
        
        return view('postSearch')->with([
            'posts' => $posts,
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'popularPosts' => Post::inRandomOrder()->take(3)->get(),
        ]);;
    }
}

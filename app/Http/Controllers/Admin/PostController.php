<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\User;
use Auth;
use \Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       

        return view('admin.itemsList.postList')->with('posts', Post::orderBy('created_at', 'desc')->latest()->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addItems.addpost')->with([
            'categories'=> Category::all(),
            'tags'=> Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //post image upload
        $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Images/posts', $image_new_name);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => 'Images/posts/'. $image_new_name,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title),
            'user_id' => $request->user()->id,
            // 'published' =>  true ,
        ]);
        
        $post->tags()->attach($request->tags);

        // dd($request->all());
        toastr()->success('Item Added successfully!');
        return view('admin.addItems.addpost')->with([
            'categories'=> Category::all(),
            'tags'=> Tag::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('admin.updateItems.editPost')->with([
            'post' => Post::find($id),
            'categories'=> Category::all(),
            'tags'=> Tag::all(),
        ]);
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
        $post = Post::find($id);

        if ($request->hasFile('image')) {
            # code...
            $image = $request->image;

            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Images/posts', $image_new_name);

            $post->image = 'Images/posts/'.$image_new_name;
        }
        if ($request->category_id) {
            # code...
            $post->category_id = $request->category_id;
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->tags()->sync($request->tags);

        $post->save();
        toastr()->success('Item update successfully.!');
        return redirect()->route('admin.posts.index');
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
        Post::destroy($id);
        toastr()->success('Item deleted successfully .!');
        return  redirect()->route('admin.posts.index');
    }
}

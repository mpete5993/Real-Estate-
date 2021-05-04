<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.itemsList.tagList')->with('tags', Tag::orderBy('created_at', 'desc')->latest()->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response3
     */
    public function create()
    {
        //
        return view('admin.addItems.addtag');
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
       $tag = Tag::create([
        'name' => $request->tag,
        'slug' => \Illuminate\Support\Str::slug($request->tag),
    ]);
    toastr()->success('Tag  added successfully .!');
        return view('admin.addItems.addtag');
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
        return view('admin.updateItems.editTag')->with(['tag' => tag::find($id)]);
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
        $ExistingTag = Tag::find($id);

        $ExistingTag->name = $request->tag;
        $ExistingTag->save();

        toastr()->success('Tag  updated successfully .!');
        return view('admin.updateItems.editTag')->with(['tag' => tag::find($id)]);
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
        Tag::destroy($id);
        toastr()->success('Tag deleted successfully .!');
        return  redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Post;
use \Illuminate\Support\Str;
use Nicolaslopezj\Searchable\SearchableTrait;


class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('properties')->with([
            'properties' => Property::orderBy('created_at', 'desc')->latest()->paginate(8)
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
       

        return view('property')->with([
            'property' => Property::where('slug', $slug)->firstOrFail(),
            'relatedProperties' => Property::inRandomOrder()->take(4)->get()
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

    /**
     * SEARCH the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
    */
    public function search(Request  $request)
    {
        $request->validate([
            'search' => 'required|min:3'
        ]);
        $search = $request->input('search');
        // $properties = Property::where('city', 'like', "%$search%")->get();

        $properties = Property::search($search)->paginate(10);
        
        return view('search')->with([
            'properties' => $properties
        ]);;
    }
}

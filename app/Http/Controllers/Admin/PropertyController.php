<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Property;
use App\Models\User;
use Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.itemsList.propertyList')->with([
            'properties'  => Property::orderBy('created_at', 'desc')->latest()->paginate(5),
            'categories' => Category::all()
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
        return view('admin.addItems.addproperty')->with([
            'categories' => Category::all(),
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
        //image upload
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Images/properties', $image_new_name);

        $property = new Property;
        $property->title = $request->title;
        $property->street = $request->street;
        $property->city = $request->city;
        $property->zipCode = $request->zipCode;
        $property->province = $request->province;
        $property->slug = \Illuminate\Support\Str::slug($request->title);
        $property->description = $request->description;
        $property->price = $request->price;
        $property->category_id = $request->category;
        $property->status = $request->status;
        $property->image = 'Images/properties/'. $image_new_name;
        $property->user_id = $request->user()->id;
        $property->details = $request->details;

        $property->save();

        //dd($request->all());
        toastr()->success('Item Added successfully!');

        return redirect()->back()->with([
            'categories' => Category::all(),
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
        return view('admin.updateItems.editProperty')->with([
            'categories' => Category::all(),
            'property' => Property::find($id), 
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
        $property = Property::find($id);

        if ($request->hasFile('image')) {
            # code...
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Images/posts', $image_new_name);
            $property->image = 'Images/posts/'.$image_new_name;
        }

        if ($request->category) {
            # code...
            $property->category_id = $request->category;
        }
        if ($request->province) {
            # code...
            $property->province = $request->province;
        }
        if ($request->status) {
            # code...
            $property->status = $request->status;
        }
        
        $property->title = $request->title;
        $property->street = $request->street;
        $property->city = $request->city;
        $property->zipCode = $request->zipcode;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->details = $request->details;

        $property->save();

        toastr()->success('Item updated successfully.!');

        return redirect()->route('admin.properties.index');
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
        Property::destroy($id);
        toastr()->success('Item Deleted successfully .!');
        return redirect()->route('admin.properties.index');

    }
}

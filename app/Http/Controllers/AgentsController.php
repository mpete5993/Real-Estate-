<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('agents')->with([
            'agents' => User::orderBy('created_at' , 'desc')->latest()->paginate(8)
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
    public function show($id)
    {
        //
        return view('agent')->with([
            'agent' => User::where('id', $id)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        //
        //user avatar update
        $image_name = $request->image_name;
        $avatar = $request->file('avatar');
        //file upload

        if ($request->hasFile('avatar')) {
            
            $image_name = rand() .'.'.$avatar->getClientOriginalExtension();
            $avatar->move('Images/users', $image_name);

            $user =Auth::user();
            $user->avatar ='users/'.$image_name;
            $user->save();

        }
        if ($request->status) {
            # code...
            $user =Auth::user();
            $user->status = $request->status;
        }

        $user = auth()->user();
        $input = $request->except('password', 'confirm_password');
        
        //password update
        if(! $request->filled('password')){
           $user->fill($input)->save();
           return back()->with('success', 'profile save !');
        }
        //encrypting the password
        $user->password = bcrypt($request->password);
        $user->fill($input)->save();

        toastr()->success('Profile was update successfully .!');

        return back()->with([
            'success'=> 'profile (and password) save !'
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

    public function profile(){
        return view('profile')->with([
            'user' => Auth::user()
        ]);
    }
}

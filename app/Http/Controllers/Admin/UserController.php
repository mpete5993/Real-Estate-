<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.itemsList.usersList')->with('users', User::orderBy('created_at', 'desc')->latest()->paginate(5));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if (Auth::user()->id == $id) {
            # code...
            return redirect()->route('admin.users.index');
        }
        return view('admin.updateItems.editUser')->with(['user' =>User::find($id), 'roles' => Role::all()]);
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
        if (Auth::user()->id == $id) {
            # code...
            toastr()->warning('You cannot edit yourself');
            return redirect()->route('admin.users.index');
        }
        

        $user = User::find($id);
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->hasFile('avatar')){
            $avatar = $request->avatar;
            $avatar_new_name = time().$avatar->getClientOriginalName();
            $avatar->move('Images/users', $avatar_new_name);

            $user->avatar = 'users/'.$avatar_new_name;
        }

        $user->save();
        toastr()->success('User  updated successfully .!');

        return  redirect()->route('admin.users.index');
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
        if (Auth::user()->id == $id) {
            # code...
            toastr()->warning('You cannot delete yourself');
            return redirect()->route('admin.users.index');
        }
        User::destroy($id);
        toastr()->success('User deleted successfully .!');
        return  redirect()->route('admin.users.index');
    }
}

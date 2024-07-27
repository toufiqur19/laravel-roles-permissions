<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;



class UserController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view users', only: ['index']),
            new Middleware('permission:edit users', only: ['edit']),
            new Middleware('permission:delete users', only: ['destroy']),
        ];
    }
    
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    function edit($id){
        $users = User::find($id);
        $roles = Role::orderBy('name','ASC')->get();
        $hasRoles = $users->roles->pluck('id');
        return view('users.edit',compact('users','roles','hasRoles'));
    }

    function update(Request $request,$id){
        $user = User::find($id);
        $user->syncRoles($request->role);
        return redirect('/users')->with('success', 'User updated successfully');
    }

    function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/users')->with('success', 'Users deleted successfully');
    }
}

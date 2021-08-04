<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.list',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create',compact('roles'));
    }

    public function store(UserRequest $request,User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->sync($request->roles);
        return redirect()->route('user.list');
    }
}

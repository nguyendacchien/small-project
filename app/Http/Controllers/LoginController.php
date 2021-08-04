<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }

    public function login(UserRequest $request)
    {

        $userLogin = $request->only('email','password');
        if (Auth::attempt($userLogin)){
            session()->put('userLogin',$userLogin);
            return redirect()->route('food.list');
        }
        return redirect()->route('admin.formlogin');
    }

    public function logout()
    {
        session()->forget('userLogin');
        return redirect()->route('admin.formlogin');

    }
}

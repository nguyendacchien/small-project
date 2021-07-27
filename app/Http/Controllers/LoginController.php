<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }

    public function login(Request $request)
    {
        $user = User::all();
        foreach ($user as $item) {
            if ($item->email == $request->email) {
                $userLogin = [
                    'name' => $item->name,
                    'email' => $item->email,
                ];
                session()->put('userLogin', $userLogin);
                return redirect()->route('food.list');
            }
        }
        session()->flash('login_error', 'Account not exits');
        return redirect()->route('admin.formlogin');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.formlogin');

    }
}

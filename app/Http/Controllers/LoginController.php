<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('backends.page.login');
    }

    public function login(Request $request, User $user)
    {
        $email=$request->email;
        $password=$request->password;
        $data = [
            'email' => $email,
            'password' => $password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('users.index');
        } else {
            session()->flash('login_error', 'account not exist!');
            return redirect()->route('login');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

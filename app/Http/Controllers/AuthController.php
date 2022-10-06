<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $validated = $request->validate([
                'username' => 'required',
                'password' => 'required|min:3'
            ]);

            if (Auth::attempt($validated)) {
                \auth()->user()->assignRole('admin');
                return redirect('/products');
            } else {
                return redirect('/login')->with('error', 'Wrong Login Details');
            }
        } else {
            return view('auth/login');
        }
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'username' => 'required',
                'password' => 'required|min:3'
            ]);

            $user = User::create($validated);

            auth()->login($user);

            \auth()->user()->assignRole(\request('role'));
            return redirect('/products')->with('success', "Account successfully registered.");
        } else {
            return view('auth/register');
        }

    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}

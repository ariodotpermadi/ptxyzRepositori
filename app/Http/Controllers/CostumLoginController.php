<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CostumLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $crendentials = $request->only('email', 'password');

        if (Auth::Attempt($crendentials)) {
            $user = Auth::user();

            if ($user->role === 'admin' && $user->company === 'PT. XYZ') {
                return redirect('/xyz/users');
            } elseif ($user->role === 'manager' && $user->company === 'PT. XYZ') {
                return redirect('/xyz/manager');
            } elseif ($user->role === 'admin' && $user->company === 'PT. XYZ-1') {
                return redirect('/xyz1/users');
            } elseif ($user->role === 'supervisor' && $user->company === 'PT. XYZ-1') {
                return redirect('/xyz1/supervisor');
            } elseif ($user->role === 'admin' && $user->company === 'PT. XYZ-2') {
                return redirect('/xyz2/users');
            } elseif ($user->role === 'supervisor' && $user->company === 'PT. XYZ-2') {
                return redirect('/xyz2/supervisor');
            }

            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

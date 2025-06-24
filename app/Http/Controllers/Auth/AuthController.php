<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function formLogin()
    {
        if(auth()->check())
        {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try{
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            if(auth()->attempt($credentials))
            {
                return redirect()->route('dashboard');
            }
            Alert::error('Gagal Login', 'Email atau password salah');
            return redirect()->route('login');
        }
        catch(Exception $e)
        {
            Alert::error('Gagal Login', 'Terjadi kesalahan');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}

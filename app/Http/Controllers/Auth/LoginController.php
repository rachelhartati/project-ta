<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'no_tlp' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('no_tlp', $credentials['no_tlp'])->first();

        if (!$user){
            return back()->with('error', 'No Telepon tidak terdaftar');
        }

        if (!Hash::check($credentials['password'], $user->password)){
            return back()->with('error', 'Password salah');
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended('/dashboard')->with('success', 'Login berhasil!');

    }
}

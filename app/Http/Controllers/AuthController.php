<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    // VALIDASI INPUT KOSONG
    if (!$request->username || !$request->password) {
        return redirect()->back()->with('warning', 'Harap isi username dan password!');
    }

    $username = $request->username;
    $password = $request->password;

    // CEK LOGIN
    if ($username == 'admin' && $password == 'password') {
        return redirect('/dashboard');
    } else {
        return redirect()->back()->with('error', 'Username atau password salah!');
    }
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\hasiltesawal;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'ttgl'=> 'max:255',
            'jeniskelamin'=> 'max:255',
            'pekerjaan'=> 'max:255',
            'pendidikan'=> 'max:255',
            'usia'=> 'max:255',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Registrasi Berhasil, please Login');
    }
}

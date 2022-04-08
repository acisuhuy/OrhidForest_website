<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function view(){
        return view('register.index');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        //$data['password'] = bcrypt($data['password']);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        
        $request->session()->flash('success', 'Registrasi Berhasil!');
        return view('register.index');
    }
}

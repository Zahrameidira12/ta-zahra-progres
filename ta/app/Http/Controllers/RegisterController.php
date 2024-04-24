<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', ['title' => 'Register', 'active' => 'login']);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:100',
            'nim' => 'required|min:4|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:200',
            'no_tlp' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:1024',
            'isadmin' => '',

        ]);



        $validatedData['password'] = bcrypt($validatedData['password']);


        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user-images'), $imageName);
            $validatedData['gambar'] = $imageName;
        }


        User::create($validatedData);

        return redirect('/login')->with('status', 'Register berhasil');
    }
}

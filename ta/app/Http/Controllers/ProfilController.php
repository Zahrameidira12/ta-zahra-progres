<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $imagePath = $user->gambar ? asset('user-images/' . $user->gambar) : asset('images/default_profil.WEBP');
        $hideTitle = true; 
        return view('profil.index', ['user' => $user, 'imagePath' => $imagePath, 'hideTitle' => $hideTitle]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'Profil tidak ditemukan.');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:100',
            'email' => 'required|min:2|max:100',
            'no_tlp' => 'required|min:6|max:15',
            'jurusan' => 'required|min:2|max:100',
            'prodi' => 'required|min:2|max:100',
            'kelas' => 'required|min:2|max:100',
            'alamat' => 'required|min:6|max:500',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $param = $request->except('_method', '_token');

        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('user-images'), $filename);
            $param['gambar'] = $filename;
        } else {
            $param['gambar'] = $user->gambar;
        }

        $update = $user->update($param);

        if ($update) {
            return redirect('profil')->with('success', 'Profil berhasil diperbarui.');
        }

        return back()->with('error', 'Gagal memperbarui profil.');
    }
}

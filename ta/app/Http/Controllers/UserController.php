<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; // Add this line

class UserController extends Controller
{

    public function index(Request $request)
{

    $users = User::where('isadmin', true);


    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $users->where('name', 'like', '%' . $searchTerm . '%');
    }


    $users = $users->paginate(10);
    return view('user.index', compact('users'));
}



    public function create()
    {
        return view('user.create', ['title' => 'Tambah User', 'users' => user::all()]);

    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('user')->with('success', 'Admin Berhasil dihapus');
    }


public function manageUsers()
{
    $users = User::where('isadmin', true)->paginate(10);
    return view('user.index', compact('users'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'nim' => 'required|unique:users|max:255',
        'password' => 'required|min:6',
        'isadmin' => 'required',
    ]);


    $validated['isadmin'] = $request->input('isadmin', 0);
    $validated['password'] = bcrypt($validated['password']);

  
    User::create($validated);

    return redirect('/user')->with('status', 'Admin berhasil dibuat');
}


}

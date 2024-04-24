<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        if (Auth::check()) {
            $user = Auth::user();
            return view('dashboard.index', compact('user'));
        }

       
        return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman dashboard.');
    }
}

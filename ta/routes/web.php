<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',['title'=>'Home Pages', 'active' => 'home']);
});

Route::get('/dashboard', function () {
    return view('dashboard.index',['title' => '']);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // untuk menampilkan form
Route::post('/login', [LoginController::class, 'authenticate']); // memproses form
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);



Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/user', [UserController::class, 'manageUsers'])->name('user.manage');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/profil/edit/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil/update/{id}', [ProfilController::class, 'update'])->name('profil.update');
    Route::post('/profil', [ProfilController::class, 'store'])->name('profil.store');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::put('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
});


Route::get('/chat', [ChatbotController::class, 'index'])->name('chat.index')->middleware('auth');;
Route::post('/chat/reply', [ChatbotController::class, 'reply'])->name('chat.reply')->middleware('auth');;

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ✅ Halaman utama (Welcome)
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('tasks.index'); // jika sudah login → ke tasks
    }
    return view('welcome'); // jika belum login → ke halaman welcome
})->name('welcome');

// ✅ Fallback untuk Laravel Breeze/Jetstream (menghindari error dashboard)
Route::get('/dashboard', function () {
    return redirect()->route('tasks.index'); // dashboard diarahkan ke tasks
})->middleware('auth')->name('dashboard');

// ✅ Grup route yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);

    // 🔹 Contoh: halaman profile user (opsional)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Sertakan route auth bawaan Laravel Breeze
require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Event; // Import model Event
use App\Models\User; // Import model User jika diperlukan untuk autentikasi

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk halaman utama (beranda), selalu me-render beranda.blade.php
Route::get('/', function () {
    $activeEvent = Event::where('status', 'aktif')->first();
    $noActiveEvent = false;
    if (!$activeEvent) {
        $noActiveEvent = true; // Set flag jika tidak ada event aktif
    }
    // Melewatkan variabel activeEvent dan noActiveEvent ke view
    return view('beranda', compact('activeEvent', 'noActiveEvent'));
})->name('home.index'); // Beri nama 'home.index' agar mudah diakses

// Route untuk Pendaftaran Tim (form pendaftaran detail)
Route::get('/daftar/{event}', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/daftar/{event}', [RegistrationController::class, 'store'])->name('registration.store');

// Route untuk halaman "Daftar" di navbar yang mengarah ke registteam.blade.php
Route::get('/registteam', function () {
    return view('registteam'); // Pastikan Anda punya resources/views/registteam.blade.php
})->name('registteam');


// Route untuk Login (jika menggunakan autentikasi bawaan Laravel)
Route::get('/login', function () {
    return view('auth.login'); // Pastikan Anda punya resources/views/auth/login.blade.php
})->name('login');

// Route untuk Register (jika menggunakan autentikasi bawaan Laravel)
Route::get('/register', function () {
    return view('auth.register'); // Pastikan Anda punya resources/views/auth/register.blade.blade.php
})->name('register');

// Route untuk Profile (sementara, bisa diubah nanti)
Route::get('/profile', function () {
    // Jika Anda belum mengimplementasikan sistem profil, arahkan ke dashboard atau halaman lain.
    return redirect()->route('registteam'); // Arahkan ke registteam atau halaman lain yang ada
})->name('profile.show');

// Route untuk halaman kontak (jika dibutuhkan terpisah dari section di beranda)
Route::get('/kontak', function () {
    return view('kontak'); // Anda perlu membuat resources/views/kontak.blade.php
})->name('contact');


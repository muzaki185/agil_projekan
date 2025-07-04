<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\LaporanController;

Route::view('/', 'welcome');
Route::view('/login', 'login')->name('login');

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');
    if ($email === 'pribadi.agil@gmail.com' && $password === 'rahasia123') {
        session(['logged_in' => true]);
        return redirect('/dashboard');
    }
    return back()->with('error', 'Email atau Password salah!');
});

Route::get('/dashboard', function () {
    if (!session('logged_in')) {
        return redirect('/login')->with('error', 'Silakan login dulu!');
    }
    return view('dashboard');
})->name('dashboard');

Route::post('/logout', function () {
    session()->forget('logged_in');
    return redirect('/login')->with('success', 'Berhasil logout.');
})->name('logout');

Route::middleware(['web'])->group(function () {
    Route::resource('obat', ObatController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('resep', ResepController::class);
    Route::resource('pemesanan', PemesananController::class);
    
    // ✅ Tambahkan route laporan
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('laporan/cetak', [LaporanController::class, 'cetak'])->name('laporan.cetak'); // ← Tambahan ini
});

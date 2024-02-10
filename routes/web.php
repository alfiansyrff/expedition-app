<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengirimanController;
use App\Livewire\Beranda;
use App\Livewire\CreatePengiriman;
use App\Livewire\DetailPengiriman;
use App\Livewire\EditPengiriman;


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

Route::view('/', 'welcome');


// Route::get('/pengiriman', Beranda::class)->name('pengiriman');
// Route::get('/pengiriman/ajax', [PengirimanController::class, 'getPengiriman'])->name('pengiriman.ajax');
// Route::get('/pengiriman/create', CreatePengiriman::class)->name('create.pengiriman')->middleware('role:admin|user');
// Route::get('/pengiriman/{pengirimanId}', DetailPengiriman::class)->name('detail.pengiriman')->middleware('permission:read-pengiriman');
// Route::get('/pengiriman/{pengirimanId}/edit', EditPengiriman::class)->name('edit.pengiriman')->middleware('role:admin');

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('/pengiriman', Beranda::class)->name('pengiriman');
    Route::get('/pengiriman/ajax', [PengirimanController::class, 'getPengiriman'])->name('pengiriman.ajax');

    Route::middleware(['role:admin|user'])->group(function () {
        Route::get('/pengiriman/create', CreatePengiriman::class)->name('create.pengiriman');
    });

    Route::middleware(['permission:read-pengiriman'])->group(function () {
        Route::get('/pengiriman/{pengirimanId}', DetailPengiriman::class)->name('detail.pengiriman');
    });

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/pengiriman/{pengirimanId}/edit', EditPengiriman::class)->name('edit.pengiriman');
    });
});

// Logout route

Route::post('logout', function () {
    auth()->guard('web')->logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');
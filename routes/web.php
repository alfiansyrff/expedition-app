<?php

use Illuminate\Support\Facades\Route;

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

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Logout
Route::post('logout', function () {
    auth()
        ->guard('web')
        ->logout();

    session()->invalidate();
    session()->regenerateToken();

    return redirect()->route('login');
})->name('logout');

Route::get('/pengiriman', App\Livewire\Beranda::class)->name('pengiriman');
Route::get('/pengiriman/ajax', [App\Http\Controllers\PengirimanController::class, 'getPengiriman'])->name('pengiriman.ajax');
Route::get('/pengiriman/create', App\Livewire\CreatePengiriman::class)->name('create.pengiriman');
Route::get('/pengiriman/{pengirimanId}', App\Livewire\DetailPengiriman::class)->name('detail.pengiriman');
Route::get('/pengiriman/{pengirimanId}/edit', App\Livewire\EditPengiriman::class)->name('edit.pengiriman');

require __DIR__ . '/auth.php';

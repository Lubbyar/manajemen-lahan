<?php

use App\Http\Controllers\LahanController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\PosisiLahanController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\LaporanKontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MapLocation;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => true,
]);

Route::get('/map', MapLocation::class);
Route::get('/tamu', function() { return view('tamu'); })->middleware('guest');
Route::get('/home', [App\Http\Controllers\HomeController::class,
'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('tanaman/create/ajax_show/{nama}', [TanamanController::class, 'getAjax']);
    Route::resources([
        'posisi' => PosisiController::class,
        'lahan' => LahanController::class,
        'tanaman' => TanamanController::class,
    ], [
        'parameters' => [
            'lahan' => 'lahan'
        ]
    ]);
    
    Route::get('posisi-validasi', [PosisiLahanController::class, 'index'])->name('validasi.index');
    Route::get('posisi-authorisasi', [PosisiLahanController::class, 'authorisasiIndex'])->name('authorisasi.index');
    Route::get('posisi-authorisasi/{posisi}', [PosisiLahanController::class, 'authorizePosisi'])->name('authorisasi.authorize');
    Route::get('posisi-validasi/{posisi}', [PosisiLahanController::class, 'validasi'])->name('validasi');
    Route::put('posisi-validasi/{posisi}', [PosisiLahanController::class, 'store'])->name('validate');
    Route::get('laporan/posisi', [LaporanKontroller::class, 'posisi'])->name('laporan.posisi');
    Route::get('slip/pencairan', [PosisiLahanController::class, 'slipPencairanIndex'])->name('slip.index');
    Route::get('slip/{posisi}', [PosisiLahanController::class, 'cetakSlip'])->name('slip.cetak');

});

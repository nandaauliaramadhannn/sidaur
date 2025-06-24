<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\IsiUmkmController;
use App\Http\Controllers\Frontend\FrontendController;

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
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('isi-pendataan-umkm', [IsiUmkmController::class, 'index'])->name('isi-pendataan-umkm');
Route::get('/auth/login', [AuthController::class, 'formLogin'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/isi-pendataan-umkm/store', [IsiUmkmController::class, 'stor'])->name('isi-umkm.store');
Route::get('/get-kabupaten/{provinsi_id}', [\App\Http\Controllers\WilayahController::class, 'getKabupaten']);
Route::get('/get-kecamatan/{kabupaten_id}', [\App\Http\Controllers\WilayahController::class, 'getKecamatan']);


Route::middleware('auth')->group(function () {
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
});

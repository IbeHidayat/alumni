<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

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

Route::resource('siswa', SiswaController::class);

Route::resource('guru', GuruController::class);

// Route::get('/', function () {
//     return view('master.home');
// });

Route::get('/', function () {
    return view('dashboard.main');
});

Route::get('/tentangsekolah', function () {
    return view('dashboard.tentangsekolah');
});

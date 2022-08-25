<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GajiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
})->name('login');

Route::get('/', function () {
    return view('login', [
        "title" => "login"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
})->middleware('auth');

Route::get('/presensi_private', [Controller::class, 'presensi_private'])->middleware('auth');

Route::get('/presensi_reguler', [Controller::class, 'presensi_reguler'])->middleware('auth');

<<<<<<< HEAD
Route::get('/jadwal', function (){
    return view('jadwal', [
        "title" => "jadwal"
    ]);
})->middleware('auth');

Route::get('/tambah_jadwal', function (){
    return view('tambah_jadwal', [
        "title" => "Tambah Jadwal"
    ]);
}) -> middleware('auth');
=======
Route::get('/gaji', [GajiController::class, 'index'])->middleware('auth');
>>>>>>> f0f17cc8e16d742b2ad2675afacf0ce3fab7770a


Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

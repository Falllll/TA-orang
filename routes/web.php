<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');

Route::get('/laporan', function () {
    return view('admin.laporan.index');
})->name('laporan');

Route::get('/jenis-laporan', function () {
    return view('admin.laporan.kategori.index');
})->name('jenis-laporan');

Route::get('/jenis-laporan/create', function () {
    return view('admin.laporan.kategori.create');
})->name('jenis-laporan.create');

Route::get('/jenis-laporan/edit', function () {
    return view('admin.laporan.kategori.edit');
})->name('jenis-laporan.edit');

Route::get('/gambar', function () {
    return view('admin.gambar.index');
})->name('gambar');

Route::get('/gambar/create', function () {
    return view('admin.gambar.create');
})->name('gambar.create');

Route::get('/gambar/edit', function () {
    return view('admin.gambar.edit');
})->name('gambar.edit');

Route::get('/video', function () {
    return view('admin.video.index');
})->name('video');

Route::get('/video/create', function () {
    return view('admin.video.create');
})->name('video.create');


Route::get('/video/edit', function () {
    return view('admin.video.edit');
})->name('video.edit');

Route::get('/register', function () {
    return view('login.register.index');
})->name('register');

Route::get('/login', function () {
    return view('login.login.index');
})->name('login');

Route::get('/home', function () {
    return view('coba');
})->name('home');Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
Route::get('/tentang/profile', function () {
    return view('navigation.tentang.profile');
});
Route::get('/tentang/visimisi', function () {
    return view('navigation.tentang.visimisi');
});
Route::get('/pelayanan', function () {
    return view('navigation.pelayanan.pelayanan');
});
Route::get('/gallery', function () {
    return view('navigation.gallery.gallery');
});
Route::get('/informasi-publik/news', function () {
    return view('navigation.news.news');
});
Route::get('/hubungi-kami', function () {
    return view('navigation.contact.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

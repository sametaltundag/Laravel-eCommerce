<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
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

Route::get('/', [PageHomeController::class, 'anasayfa'])->name('anasayfa');
Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');
Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
Route::get('/sepet', [PageController::class, 'sepet'])->name('sepet');
Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');
Route::get('/urun/detay', [PageController::class, 'urundetay'])->name('urundetay');

Route::get('/kadin-giyim', [PageController::class, 'urunler'])->name('kadingiyim');
Route::get('/erkek-giyim', [PageController::class, 'urunler'])->name('erkekgiyim');
Route::get('/cocuk-giyim', [PageController::class, 'urunler'])->name('cocukgiyim');
Route::get('/indirimli-urunler', [PageController::class, 'indirimdekiurunler'])->name('indirimdekiurunler');

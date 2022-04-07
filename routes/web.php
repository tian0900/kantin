<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\informationcontroller;
use App\Http\Controllers\denahcontroller;
use App\Http\Controllers\denahsatulantaiduacon;

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
    return view('index');
});
Route::get('/blogg', function () {
    return view('blogg');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/tabel', [informationcontroller::class, 'tabel']);
Route::get('/createinformation', [informationcontroller::class, 'createinformation']);
Route::get('/edittabel/edit/{id}', [informationcontroller::class, 'edit']);
Route::post('createinformation/store', [informationcontroller::class, 'store'])->name('tambah.store');
Route::post('tabel/update/{id}', [informationcontroller::class, 'update'])->name('tabel.update');
Route::get('tabel/delete/{id}', [informationcontroller::class, 'delete'])->name('tabel.delete');

Route::get('/tabeldenah', [denahcontroller::class, 'tabeldenah']);
Route::get('/createkantinsatu', [denahcontroller::class, 'createkantinsatu']);
Route::post('createkantinsatu/store', [denahcontroller::class, 'store'])->name('kantinsatu.store');
Route::get('tabeldenah/delete/{id}', [denahcontroller::class, 'delete'])->name('kantinsatu.delete');
Route::get('/editkantinsatu/edit/{id}', [denahcontroller::class, 'edit']);
Route::post('tabeldenah/update/{id}', [denahcontroller::class, 'update'])->name('kantinsatu.update');

Route::get('/tabeldenahsatulantaidua', [denahsatulantaiduacon::class, 'tabeldenahsatulantaidua']);
Route::get('/createkantinsatulantaidua', [denahsatulantaiduacon::class, 'createkantinsatulantaidua']);
Route::post('createkantinsatu/store', [denahsatulantaiduacon::class, 'store'])->name('kantinsatulantaidua.store');
Route::get('tabeldenahsatulantaidua/delete/{id}', [denahsatulantaiduacon::class, 'delete'])->name('kantinsatulantaidua.delete');
Route::get('/editkantinsatulantaidua/edit/{id}', [denahsatulantaiduacon::class, 'edit']);
Route::post('tabeldenahsatulantaidua/update/{id}', [denahsatulantaiduacon::class, 'update'])->name('kantinsatulantaidua.update');
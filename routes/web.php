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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/berita','App\Http\Controllers\BeritaController@index')->name('berita.index');
Route::get('/berita/create',[App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita',[App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}',[App\Http\Controllers\BeritaController::class, 'show'])->name('berita.show');
Route::delete('/berita/{id}',[App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.destroy');

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

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'post']);

Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class,'edit']);
Route::patch('/siswa/{id}', [App\Http\Controllers\SiswaController::class,'update']);
Route::get('/siswa/{id}/destroy', [App\Http\Controllers\SiswaController::class,'destroy']);

// Route::get('/kelasController', 'KelasController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZzigaeController;
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

Route::get('/zzigaes', [ZzigaeController::class, 'index'])->name('zzigaes.index');
Route::get('/zzigaes/create', [ZzigaeController::class, 'create'])->name('zzigaes.create');
Route::post('/zzigaes', [ZzigaeController::class, 'store'])->name('zzigaes.store');
Route::get('/zzigaes/{id}', [ZzigaeController::class, 'show'])->name('zzigaes.show');
Route::delete('/zzigaes/{id}', [ZzigaeController::class, 'destroy'])->name('zzigaes.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

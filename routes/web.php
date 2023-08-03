<?php

use App\Http\Controllers\rickmortyController;
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
Route::get('/rick', [rickmortyController::class, 'index'])->name('rick');
Route::get('/rick/{id}', [rickmortyController::class, 'detail'])->name('rick');
Route::post('/rick', [rickmortyController::class, 'filtro'])->name('rick');

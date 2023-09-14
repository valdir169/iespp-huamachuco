<?php

use App\Http\Controllers\PaginasController;
use Illuminate\Contracts\View\View;
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

Route::get('/', [PaginasController::class, 'main'])->name('index');
Route::get('/admision', [PaginasController::class, 'admision'])->name('admision');
Route::get('/carreras', [PaginasController::class, 'carreras'])->name('carreras');
Route::get('/educacioninicial', [PaginasController::class, 'educacioninicial'])->name('educacioninicial');
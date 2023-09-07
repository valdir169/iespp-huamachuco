<?php

use App\Http\Controllers\PaginasController;
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

Route::get('admision', function(){
    return view('pages.admision');
});

Route::get('CarrerasProfecionales', function(){
    return view('pages.carreras');
});


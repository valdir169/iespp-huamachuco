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

Route::get('/educacion_inicial', [PaginasController::class, 'educacioninicial'])->name('inicial');
Route::get('/idiomas_especialidad_ingles',[PaginasController::class, 'idiomasingles']) -> name('ingles');
Route::get('/educacion_secundaria_especialidad_comunicacion',[PaginasController::class, 'comunicacion']) -> name('comunicacion');
Route::get('/modalidad_admision',[PaginasController::class, 'modalidad']) -> name('modalidad_admision');

Route::get('/educacioninicial', [PaginasController::class, 'educacioninicial'])->name('educacioninicial');

// routes for institucion
Route::get('/presentacion', [PaginasController::class, 'presentacion'])->name('presentacion');
Route::get('/historia', [PaginasController::class, 'historia'])->name('historia');
Route::get('/nosotros', [PaginasController::class, 'nosotros'])->name('nosotros');


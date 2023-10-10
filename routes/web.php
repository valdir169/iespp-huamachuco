<?php

use App\Http\Controllers\PaginasController;
use App\Mail\ContactoMailable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
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
Route::get('/contacto', [PaginasController::class, 'contacto'])->name('contacto');

Route::get('/educacion_inicial', [PaginasController::class, 'educacioninicial'])->name('inicial');
Route::get('/idiomas_especialidad_ingles', [PaginasController::class, 'idiomasingles'])->name('ingles');
Route::get('/educacion_secundaria_especialidad_comunicacion', [PaginasController::class, 'comunicacion'])->name('comunicacion');
Route::get('/modalidad_admision', [PaginasController::class, 'modalidad'])->name('modalidad_admision');
Route::get('/academia', [PaginasController::class, 'academia'])->name('academia');

Route::get('/educacioninicial', [PaginasController::class, 'educacioninicial'])->name('educacioninicial');
Route::get('/galeria', [PaginasController::class, 'galeria'])->name('galeria');

// routes for institucion
Route::get('/presentacion', [PaginasController::class, 'presentacion'])->name('presentacion');
Route::get('/historia', [PaginasController::class, 'historia'])->name('historia');
Route::get('/nosotros', [PaginasController::class, 'nosotros'])->name('nosotros');
Route::get('/organigrama', [PaginasController::class, 'organigrama'])->name('organigrama');
Route::get('/directorio', [PaginasController::class, 'directorio'])->name('directorio');
Route::get('/plana-docente', [PaginasController::class, 'planaDocente'])->name('plana-docente');

// Route for transparencia
Route::get('/licenciamiento', [PaginasController::class, 'licenciamiento'])->name('licenciamiento');
Route::get('/documentos-gestion', [PaginasController::class, 'documentosGestion'])->name('documentos-gestion');
Route::get('/calendario-academico', [PaginasController::class, 'calendarioAcademico'])->name('calendario-academico');
Route::get('/inversiones-donaciones', [PaginasController::class, 'inversionesDonaciones'])->name('inversiones-donaciones');
Route::get('/documentos-transparencia', [PaginasController::class, 'documentosTransparencia'])->name('documentos-transparencia');

// procees form
Route::post('/contactanos', [PaginasController::class, 'processData'])->name('contacto.process');
Route::get('/descargar-file/{fileName}', function ($fileName) {
    $routeFile = public_path('files/' . $fileName);

    if (file_exists($routeFile)) {
        return response()->download($routeFile, $fileName);
    } else {
        abort(404, 'Archivo no encontrado');
    }
});

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

Route::get('/programas-de-estudio', [PaginasController::class, 'programas'])->name('programas');

Route::get('/educacion-inicial', [PaginasController::class, 'educacioninicial'])->name('inicial');
Route::get('/idiomas-especialidad-ingles', [PaginasController::class, 'idiomasingles'])->name('ingles');
Route::get('/educacion-secundaria-especialidad-comunicacion', [PaginasController::class, 'comunicacion'])->name('comunicacion');
Route::get('/modalidad-admision', [PaginasController::class, 'modalidad'])->name('modalidad_admision');
Route::get('/academia', [PaginasController::class, 'academia'])->name('academia');
Route::get('/educacioninicial', [PaginasController::class, 'educacioninicial'])->name('educacioninicial');

//routes for services
Route::get('/biblioteca', [PaginasController::class, 'biblioteca'])->name('biblioteca');
Route::get('/psicopedagogia', [PaginasController::class, 'psicopedagogia'])->name('psicopedagogia');
Route::get('/topico', [PaginasController::class, 'topico'])->name('topico');
Route::get('/capacitacion-brigadistas', [PaginasController::class, 'brigadistas'])->name('brigadistas');
Route::get('/talleres', [PaginasController::class, 'talleres'])->name('talleres');


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
Route::get('/convenios', [PaginasController::class, 'convenios'])->name('convenios');
Route::get('/inversiones-donaciones', [PaginasController::class, 'inversionesDonaciones'])->name('inversiones-donaciones');
Route::get('/documentos-transparencia', [PaginasController::class, 'documentosTransparencia'])->name('documentos-transparencia');

// Route for Trámites
Route::get('/contacto', [PaginasController::class, 'contacto'])->name('contacto');
Route::get('/matricula', [PaginasController::class, 'matricula'])->name('matricula');

//Route for other
Route::get('/galeria', [PaginasController::class, 'gallery'])->name('galeria');


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

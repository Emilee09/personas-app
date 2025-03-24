<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {   return view('menu'); }); // Ruta para el menu

Route::get('/comunas', [ComunaController::class, 'index']) -> name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store']) -> name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'create']) -> name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');

Route::get('/municipios', [MunicipioController::class, 'index']) -> name('municipios.index');
Route::post('/municipios', [MunicipioController::class, 'store']) -> name('municipios.store');
Route::get('/municipios/create', [MunicipioController::class, 'create']) -> name('municipios.create');
route::delete('/municipios/{municipio}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');
route::put('/municipios/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');   
route::get('/municipios/{municipio}/edit', [MunicipioController::class, 'edit'])->name('municipios.edit');

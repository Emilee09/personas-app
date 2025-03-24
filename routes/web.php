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

route::get('/departamentos', [DepartamentoController::class, 'index']) -> name('departamentos.index');
route::post('/departamentos', [DepartamentoController::class, 'store']) -> name('departamentos.store');
route::get('/departamentos/create', [DepartamentoController::class, 'create']) -> name('departamentos.create');
route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
route::put('/departamentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');   
route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');

route::get('/paises', [PaisController::class, 'index']) -> name('paises.index');    
route::post('/paises', [PaisController::class, 'store']) -> name('paises.store');
route::get('/paises/create', [PaisController::class, 'create']) -> name('paises.create');
route::delete('/paises/{pais}', [PaisController::class, 'destroy'])->name('paises.destroy');
route::put('/paises/{pais}', [PaisController::class, 'update'])->name('paises.update');
route::get('/paises/{pais}/edit', [PaisController::class, 'edit'])->name('paises.edit');
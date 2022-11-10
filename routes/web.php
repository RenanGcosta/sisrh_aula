<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
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
    return view('index');   //pagina inicial
});

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');


Route::get('/funcionarios/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionarios.edit'); //formulario de edição
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update'); //rota do banco
Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy'); //rota para destruir registro


Route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');
Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
Route::post('/cargos', [CargoController::class, 'store'])->name('cargos.store'); //stored

Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::post('/departamentos', [CargoController::class, 'store'])->name('departamentos.store'); //stored
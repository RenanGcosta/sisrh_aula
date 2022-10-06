<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CargoController;
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

Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');

Route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorProduto;
use App\Http\Controllers\ControladorCategorias;

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
    return view('index');
});

Route::get('/produtos', [ControladorProduto::class, 'indexView']);

Route::get('/produtos/novo', [ControladorProduto::class, 'create'])->name('produtos.create');

Route::post('/produtos', [ControladorProduto::class, 'store'])->name('produtos.store');

Route::get('produtos/apagar/{id}', [ControladorProduto::class, 'destroy'])->name('produtos.destroy');

Route::get('produtos/editar/{id}', [ControladorProduto::class, 'edit'])->name('produtos.edit');

Route::post('produtos/{id}', [ControladorProduto::class, 'update'])->name('produtos.update');

Route::get('/categorias', [ControladorCategorias::class, 'index']);

Route::get('/categorias/novo', [ControladorCategorias::class, 'create'])->name('categorias.create');

Route::get('categorias/apagar/{id}', [ControladorCategorias::class, 'destroy'])->name('categorias.destroy');

Route::get('categorias/editar/{id}', [ControladorCategorias::class, 'edit'])->name('categorias.edit');

Route::post('categorias/{id}', [ControladorCategorias::class, 'update'])->name('categorias.update');

Route::post('/categorias', [ControladorCategorias::class, 'store'])->name('categorias.store');

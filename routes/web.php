<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AtencionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DerivacionController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\ReclamoController;
use App\Http\Controllers\UsuarioController;

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
    return view('welcome');
})->name("inicio");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/cliente/crear', [ClienteController::class, 'crear'])->middleware(['auth']);
Route::post('/cliente/crear', [ClienteController::class, 'mostrar'])->middleware(['auth']);
Route::post('/reclamo/crear', [ReclamoController::class, 'crear'])->middleware(['auth']);
Route::post('/reclamo/crear', [ReclamoController::class, 'mostrar'])->middleware(['auth']);
Route::post('/usuario/crear', [UsuarioController::class, 'crear'])->middleware(['auth']);
Route::post('/usuario/crear', [UsuarioController::class, 'mostrar'])->middleware(['auth']);

Route::resource('cliente', ClienteController::class);
Route::resource('reclamo', ReclamoController::class);

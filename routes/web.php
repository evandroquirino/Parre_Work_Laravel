<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostureirasController;
use App\Http\Controllers\PersonalizacaoController;

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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('costureiras')->group(function () {
        Route::get('/', [CostureirasController::class, 'index'])->name('costureiras.index');
        Route::get('/create', [CostureirasController::class, 'create'])->name('costureiras.create');    
        Route::get('/{id}/edit', [CostureirasController::class, 'edit'])->name('costureira.edit');
       
        Route::post('/', [CostureirasController::class, 'store'])->name('costureira.store');
        Route::put('/{id}', [CostureirasController::class, 'update'])->name('costureira.update');
        Route::delete('/{id}', [CostureirasController::class, 'destroy'])->name('costureira.destroy');
        
    });

    Route::prefix('personalizacoes')->group(function () {
        Route::get('/', [PersonalizacaoController::class, 'index'])->name('personalizacoes.index');
        Route::get('/create', [PersonalizacaoController::class, 'create'])->name('personalizacoes.create');    
        Route::get('/{id}/edit', [PersonalizacaoController::class, 'edit'])->name('personalizacao.edit');
       
        Route::post('/', [PersonalizacaoController::class, 'store'])->name('personalizacao.store');
        Route::put('/{id}', [PersonalizacaoController::class, 'update'])->name('personalizacao.update');
        Route::delete('/{id}', [PersonalizacaoController::class, 'destroy'])->name('personalizacao.destroy');
       
    });

});

<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostureirasController;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\PersonalizacaoController;
use App\Http\Controllers\TecidoController;
use App\Http\Controllers\PedidoController;


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

    Route::prefix('tecidos')->group(function () {
        Route::get('/', [TecidoController::class, 'index'])->name('tecidos.index');
        Route::get('/create', [TecidoController::class, 'create'])->name('tecidos.create');    
        Route::get('/{id}/edit', [TecidoController::class, 'edit'])->name('tecido.edit');
       
        Route::post('/', [TecidoController::class, 'store'])->name('tecido.store');
        Route::put('/{id}', [TecidoController::class, 'update'])->name('tecido.update');
        Route::delete('/{id}', [TecidoController::class, 'destroy'])->name('tecido.destroy');
       
    });

    Route::prefix('clientes')->group(function () {
        Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
        Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');    
        Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
       
        Route::post('/', [ClienteController::class, 'store'])->name('cliente.store');
        Route::post('/', [ClienteController::class, 'storeModal'])->name('cliente.storeModal');
        Route::put('/{id}', [ClienteController::class, 'update'])->name('cliente.update');
        Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
       
    });

    Route::prefix('etapas')->group(function () {
        Route::get('/', [EtapaController::class, 'index'])->name('etapas.index');
        Route::get('/create', [EtapaController::class, 'create'])->name('etapas.create');    
        Route::get('/{id}/edit', [EtapaController::class, 'edit'])->name('etapa.edit');
       
        Route::post('/', [EtapaController::class, 'store'])->name('etapa.store');
        Route::put('/{id}', [EtapaController::class, 'update'])->name('etapa.update');
        Route::delete('/{id}', [EtapaController::class, 'destroy'])->name('etapa.destroy');
       
    });

    Route::prefix('pedidos')->group(function () {
        Route::get('/', [PedidoController::class, 'index'])->name('pedidos.index');
        Route::get('/create', [PedidoController::class, 'create'])->name('pedidos.create'); 
        Route::get('/{id}', [PedidoController::class, 'show'])->name('pedidos.show');    
        Route::get('/{id}/edit', [PedidoController::class, 'edit'])->name('pedido.edit');
       
        Route::post('/', [PedidoController::class, 'store'])->name('pedido.store');
        Route::put('/{id}', [PedidoController::class, 'update'])->name('pedido.update');
        Route::delete('/{id}', [PedidoController::class, 'destroy'])->name('pedido.destroy');
       
    });

});

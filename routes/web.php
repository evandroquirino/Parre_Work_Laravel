<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostureirasController;

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
        Route::get('/costureiras/create', [CostureirasController::class, 'create'])->name('costureiras.create');    
        Route::get('/costureira/{id}/edit', [CostureirasController::class, 'edit'])->name('costureira.edit');
       
        Route::post('/costureiras', [CostureirasController::class, 'store'])->name('costureira.store');
        Route::put('/costureira/{id}', [CostureirasController::class, 'update'])->name('costureira.update');
        Route::delete('/costureira/{id}', [CostureirasController::class, 'destroy'])->name('costureira.destroy');
        
    });

});

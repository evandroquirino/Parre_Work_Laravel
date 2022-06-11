<?php

use App\Http\Controllers\CostureirasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('costureiras', [CostureirasController::class, 'indexApi']);

Route::get('costureira/{id}', [CostureirasController::class, 'showApi']);

Route::post('costureira', [CostureirasController::class, 'storeApi']);

Route::put('costureira/{id}', [CostureirasController::class, 'updateApi']);

Route::delete('costureira/{id}', [CostureirasController::class, 'destroyApi']);

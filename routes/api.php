<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/health', function (Request $request) {
    return 'Health...';
});

// Rutas públicas
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

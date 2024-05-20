<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::apiResource('tasks', TaskController::class);
Route::GET('/tasks', [TaskController::class, 'index']);
Route::POST('/tasks/store', [TaskController::class, 'store']);
Route::GET('/tasks/{id}', [TaskController::class, 'show']);
Route::PUT('/tasks/{id}', [TaskController::class, 'update']);
Route::DELETE('/tasks/{id}', [TaskController::class, 'destroy']);


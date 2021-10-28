<?php

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

Route::get('projects',[App\Http\Controllers\ProjectController::class, 'index']);
Route::post('projects', [App\Http\Controllers\ProjectController::class, 'store']);
Route::get('projects/{id}',[App\Http\Controllers\ProjectController::class, 'show']);
Route::put('projects/{project}', [App\Http\Controllers\ProjectController::class, 'markAsCompleted']);
Route::post('tasks',[App\Http\Controllers\TaskController::class, 'store'] );
Route::put('tasks/{task}', [App\Http\Controllers\TaskController::class, 'markAsCompleted']);
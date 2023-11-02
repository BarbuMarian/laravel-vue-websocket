<?php

use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\CompleteTaskController;

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
//    Route::apiResource('/tasks', TaskController::class);
//    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
    Route::get('/tasks',[TaskController::class,'index']);
    Route::get('/tasks/{task}',[TaskController::class,'show']);
    Route::post('/tasks', [TaskController::class,'store']);
    Route::post('/tasks/update/{task}', [TaskController::class,'update']);
    Route::post('/tasks/{task}/delete', [TaskController::class,'destroy']);

    Route::post('/tasks/{task}/complete', CompleteTaskController::class);
});

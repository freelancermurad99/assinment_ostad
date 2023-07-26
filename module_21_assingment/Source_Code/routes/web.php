<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::group(['middleware' => 'api', 'prefix' => 'todos'], function () {
    Route::post('/', [TodoController::class, 'store']);
    Route::get('/', [TodoController::class, 'index']);
    Route::get('/{id}', [TodoController::class, 'show']);
    Route::post('update/{id}', [TodoController::class, 'update']);
    Route::get('delete/{id}', [TodoController::class, 'destroy']);
});



Route::post('/user_reg', [UserController::class, 'user_reg']);
Route::post('/user_login', [UserController::class, 'user_login']);
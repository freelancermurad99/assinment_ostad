<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard');

    Route::get('event_list', [EventController::class, 'event_list'])->name('event_list');
    Route::get('event_add', [EventController::class, 'event_add'])->name('event_add');
    Route::get('event_edit/{id}', [EventController::class, 'event_edit'])->name('event_edit');
    Route::get('event_delete/{id}', [EventController::class, 'event_delete'])->name('event_delete');
    Route::get('event_details/{id}', [EventController::class, 'event_details'])->name('event_details');
    Route::post('event_add_store', [EventController::class, 'event_add_store'])->name('event_add_store');
    Route::post('event_update', [EventController::class, 'event_update'])->name('event_update');
});

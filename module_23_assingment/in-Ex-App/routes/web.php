<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
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
    return redirect()->route('login');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/expense_list', [ExpenseController::class, 'expense_list'])->name('expense');
    Route::get('/income_list', [IncomeController::class, 'income_list'])->name('income');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

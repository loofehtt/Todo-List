<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TodolistController;
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

Route::get('/', [TodolistController::class, 'index'])->name('index');

Route::post('/', [TodolistController::class, 'store'])->name('store');

Route::post('/{todolist:id}', [TodolistController::class, 'mark'])->name('mark');

Route::delete('/{todolist:id}', [TodolistController::class, 'destroy'])->name('destroy');

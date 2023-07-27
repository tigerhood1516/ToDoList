<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [TodolistController::class, 'index'])->name('index');
Route::post('/', [TodolistController::class, 'store'])->name('store');
Route::delete('/{todolist:id}', [TodolistController::class, 'destroy'])->name('destroy');

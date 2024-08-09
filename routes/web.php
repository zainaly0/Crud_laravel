<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'form'])->name('form');
Route::post('/add', [UserController::class, 'add'])->name('add');
Route::get('/show', [UserController::class, 'show'])->name('show');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');

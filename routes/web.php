<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome');
Route::resource('todos',TodoController::class);


Route::post('/todos/{id}/status',[TodoController::class,'updateStatus']);
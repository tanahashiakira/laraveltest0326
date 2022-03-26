<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class,'index']);
Route::get('/add',[TaskController::class,'add']);
Route::post('/add',[TaskController::class,'create']);

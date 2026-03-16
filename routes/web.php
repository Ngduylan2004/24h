<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class,'home']);
Route::get('/about', [Controller::class,'about']);
Route::get('/services', [Controller::class,'services']);
Route::get('/projects', [Controller::class,'projects']);
Route::get('/contact', [Controller::class,'contact']);

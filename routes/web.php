<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AitoolsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoriesController::class);
Route::resource('aitools', AitoolsController::class);
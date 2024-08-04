<?php
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AitoolsController;
use App\Http\Controllers\BlogPostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//default route
Route::get('/', function () {
    return view('welcome');
});

//resource routes
Route::resource('categories', CategoriesController::class);
Route::resource('aitools', AitoolsController::class);
Route::resource('blogposts', BlogPostsController::class);
Route::resource('users', UserController::class);

//custom routes
Route::get('users.show', [UserController::class, 'show'])->name('users.show');
Route::get('login', [UserController::class, 'login'])->name('users.login');
Route::post('handle-login', [UserController::class, 'handleLogin'])->name('users.handleLogin');
Route::get('register', [UserController::class, 'create'])->name('users.create');
Route::post('logout', [UserController::class, 'logout'])->name('users.logout');
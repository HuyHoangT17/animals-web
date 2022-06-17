<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [PetController::class, 'index'])->name('home');
Route::get('/users/login', [UserController::class, 'userLogin'])->name('login');
Route::post('/login-user', [UserController::class, 'postLogin'])->name('post-login');
Route::get('/users/form', [UserController::class, 'getForm'])->name('get-form');
Route::post('/register', [UserController::class, 'postForm'])->name('post-form');


// Route::get('/users/list', [UserController::class, 'getUser'])->name('list');
// Route::get('/users/add', [UserController::class, 'add'])->name('add');
// Route::post('/users/add', [UserController::class, 'postUser'])->name('postuser');
// Route::get('/users/edit/{id}', [UserController::class, 'getEdit'])->name('get-edit');
// Route::post('/update', [UserController::class, 'postEdit'])->name('post-edit');
// Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\UsernewController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [ProductController::class,'index'])->name('product.index');

Route::get('/home', [HomeController::class,'index'])->name('home.index');

//Rota controller com Parâmetro
Route::get('/homeb/{name}', [HomeController::class, 'indexWithParameter'])->name('home.indexWithParameter');

//Chamar function que retorna uma View
Route::get('/user', [UserController::class, 'index'])->name('user.index');

//ROTA com HTTP request
Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getAllPost');

Route::get('/posts/{id}', [ClientController::class, 'postById'])->name('posts.postById');

Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addPost');

Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.updatePost');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.deletePost');

//Fluent Strings
Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluents.index');

//HTTP request and HTML form
Route::get('/newuser', [UsernewController::class, 'index'])->name('newuser.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');
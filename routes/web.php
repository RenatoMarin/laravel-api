<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\UsernewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
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

//Route::get('/home', [HomeController::class,'index'])->name('home.index');

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

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('check.user');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');


//Session Http Session
Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

//DB
Route::get('/posts', [PostController::class, 'getAllpost'])->name('post.get');

Route::get('/add-post', [PostController::class, 'addPost'])->name('post.add');

Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('post.submit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');

Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');

//User DB Join Clause
Route::get('/inner-join', [PostController::class, 'innerJoinClause'])->name('post.innerjoin');
//Left Join
Route::get('/left-join', [PostController::class, 'leftJoinClause'])->name('post.leftjoin');
//Right Join
Route::get('/right-join', [PostController::class, 'rightJoinClause'])->name('post.rightjoin');

//Model
Route::get('/all-posts', [PostController::class, 'getAllPostsUsingModel'])->name('post.getallpostusingmodel');

//Blade Template
Route::get('/test', function(){
    return view('test');
});

//Blade Template Layout
Route::get('/home', function(){
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Método GET simples
Route::get('/users', function(){
    return 'Hello there';
});

//Método GET simples com parâmetro.
Route::get('/user/{name}', function($name) {
    return 'Hello '. $name;
});

//Método GET simples com parâmetro OPCIONAL.
Route::get('/userb/{name?}', function($name = null) {
    return 'Hello '. $name;
});

//where('parametro', '[contidion]+');
//Método GET simples onde somente aceitará letras.
Route::get('/userc/{name?}', function($name = null) {
    return 'Hello '. $name;
})->where('name', '[a-zA-Z]+');

//Método GET simples com parâmetro OPCIONAL.
Route::get('/product/{id?}', function($id = null) {
    return 'Product id: ' . $id;
});

//Método GET simples onde somente aceitará números.
Route::get('/productb/{id?}', function($id = null) {
    return 'Product id: ' . $id;
})->where('id', '[0-9]+');


//Ver App/Providers/RouteServiceProvider.php (Adicionar constraints)
Route::get('/userd/{name?}', function($name = null) {
    return 'Hello '. $name;
});

Route::get('/productc/{id?}', function($id = null) {
    return 'Product id: ' . $id;
});

//Resgistro de uma rota que responde a vários métodos HTTP 
Route::match(['get', 'post'], '/students', function(Request $req){
    return 'Request method is ' . $req->method();
});

Route::any('/studentsb', function(Request $req){
    return 'Request method is ' . $req->method();
});


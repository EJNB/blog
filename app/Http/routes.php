<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');// asi retornamos una vista
//    return'curso laravel';
});

Route::any('foo', function(){
    return 'hello word';
});

Route::get('/form', function(){
    return view('form');
});

Route::post('/form', function(){
    return 'cargado peticion';
});

//cargando un controlador y uyn metodo del controlador
Route::get('articles', 'ArticlesController@index');

//utilizar parametros
Route::get('greet/{name}', function($name){
    return 'hola ' .$name;
});

//redireccionado rutas
Route::get('redirect', function(){

});
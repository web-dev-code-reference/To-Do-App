<?php

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

Route::get('/shop', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('new', 'PagesController@new');


Route::get('todos', 'TodosController@index');
Route::post('create/todo', 'TodosController@store');


Route::get('/todo/delete/{id}','TodosController@delete')->name('todo.delete');
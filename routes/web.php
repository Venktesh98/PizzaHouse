<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas','PizzaController@index')->name('pizzas.index')->middleware('auth');  # here index and are called actions.
Route::get('/pizzas/create','PizzaController@create')->name('pizzas.create'); # create or register html page
Route::post('/pizzas','PizzaController@store')->name('pizzas.store'); # store the data in the database
Route::get('/pizzas/{id}','PizzaController@show')->name('pizzas.show')->middleware('auth'); # show the pizzas ordered
Route::delete('/pizzas/{id}','PizzaController@destroy')->name('pizzas.destroy')->middleware('auth'); # delete the order from the database


Auth::routes([
    'register'=> false # this is used to disable the registration route. 
]);

Route::get('/home', 'HomeController@index')->name('home');



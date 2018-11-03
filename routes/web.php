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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'manage', 'middleware' => 'auth'], function(){
    Route::resource('tasks', 'Manage\\TasksController');
});

// Route::group(['prefix' => 'tasks','as' => 'tasks.','middleware' => 'auth'], function(){
//     Route::get('/create', 'TasksController@create')->name('create');
//     Route::get('/', 'TasksController@index')->name('index');
// 	Route::get('/{id}', 'TasksController@show')->name('show');
// 	Route::get('/delete/{id}', 'TasksController@delete')->name('delete');

	
// });


//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

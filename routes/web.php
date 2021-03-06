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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/projects/create', 'ProjectController@create')->name('project.create');
    Route::post('/projects/store', 'ProjectController@store')->name('project.store');
    Route::post('/projects/{project}/build', 'ProjectController@build')->name('project.build');
    Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('project.edit');
    Route::put('/projects/{project}', 'ProjectController@update')->name('project.update');
});


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
    return view('admin.layouts.index');
});
Route::group(['prefix'=>'admin'], function () {
    Route::group(['prefix'=>'category'], function () {


        Route::get('list', 'CategoryController@index');

        Route::get('add', 'CategoryController@create');
        Route::post('add', 'CategoryController@store');

        Route::get('edit/{id}', 'CategoryController@edit');
        Route::post('edit/{id}','CategoryController@update');

        Route::get('delete/{id}', 'CategoryController@destroy');

    });

    Route::group(['prefix'=>'course'], function () {

        Route::get('list', 'CourseController@index');

        Route::get('add', 'CourseController@create');
        Route::post('add', 'CourseController@store');

        Route::get('edit/{id}', 'CourseController@edit');
        Route::post('edit/{id}','CourseController@update');

        Route::get('delete/{id}', 'CourseController@destroy');
    });

    Route::group(['prefix'=>'user'], function () {

        Route::get('list', 'UserController@index');

        Route::get('add', 'UserController@create');
        Route::post('add', 'UserController@store');

        Route::get('edit/{id}', 'UserController@edit');
        Route::post('update/{id}','UserController@update');

        Route::get('delete/{id}', 'UserController@destroy');

    });


});

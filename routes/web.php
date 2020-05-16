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

// Route::get('categories','CategoryController@index');
// Route::get('categories/{id}','CategoryController@show');

// Route::get('tags','TagController@index');
// Route::get('tags/{id}','TagController@show');

// Route::get('comments','CommentController@index');
// Route::get('comments/{id}','CommentController@show');

Route::middleware(['auth'])->group(function(){
       
        Route::post('categories','CategoryController@store')->name('save-category');
        Route::get('categories','CategoryController@index')->name('categories');;
        Route::get('categories/{id}','CategoryController@show');

        Route::post('tags','TagController@store')->name('save-tag');
        Route::get('tags','TagController@index')->name('tags');
        Route::get('tags/{id}','TagController@show');

        Route::get('comments','CommentController@index')->name('comments');
        Route::get('comments/{id}','CommentController@show');
       
        Route::get('users','UserController@index')->name('users');
       
        Route::get('posts','PostController@index')->name('posts');
        Route::get('posts{id}','PostController@show')->name('show-posts');
        Route::get('add-post','PostController@newPost')->name('add-post');
        Route::post('add-post','PostController@store')->name('save-post');

});

Auth::routes(['verify'=>true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


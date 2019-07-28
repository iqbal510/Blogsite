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
// Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

	 Route::get('/home', 'HomeController@index')->name('home');
	

	// Route::get('/post/create', [

	// 	'uses' => "PostController@create",
	// 	'as' => 'post.create'


	// ]);
	// Route::get('/post/create','PostController@create')->name('post.create');

	 //CategoryController::::

	Route::get('/category/create','CategoryController@create')->name('category.create');


	// Route::post('/category/store','CategoryController$store')->name('category.store');


// 	Route::get('/post/store', [

// 		'uses' => "PostController@store",
// 		'as' => 'post.store'


// ]);
	Route::resource('post', 'PostController');

		Route::post('/category/store', [

		'uses' => "CategoryController@store",
		'as' => 'category.store'


]);
	Route::get('/categories', [

		'uses' => "CategoryController@index",
		'as' => 'categories'


]);

	Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');

	Route::get('/category/delete/{id}','CategoryController@destroy')->name('category.delete');

	Route::post('/category/update/{id}','CategoryController@update')->name('category.update');

	//PostController ::

	Route::get('/posts','PostController@index')->name('posts');

	Route::get('/posts/trashed','PostController@trashed')->name('posts.trashed');

	Route::get('/post/delete/{id}','PostController@destroy')->name('post.delete');

	Route::get('/post/kill/{id}','PostController@kill')->name('post.kill');

	Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');

	Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');

	Route::post('/post/update/{id}','PostController@update')->name('post.update');



});





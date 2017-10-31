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

Route::get('/', 'ProductController@index');


Route::get('/profile/{name}', function ($name) {

	$user= App\User::where('name',$name)->firstOrFail();

    return view('blog.home',get_defined_vars());
});

Route::get('ip', function () {
    return view('ip');
})->middleware('ip');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('blogs','BlogController@allblog');
Route::resource('blog','BlogController');
Route::resource('task', 'TaskController');
Route::resource('product', 'ProductController');





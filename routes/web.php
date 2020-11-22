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

/**
 * Backend routes
 */

Route::get('/', function () {
    return view('backend.pages.dashboard.dashboard');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'admin.'],function(){
    //Category Routes
    Route::get('/category/response', 'CategoryController@getResponse')->name('category.response');
    Route::resource('/category', 'CategoryController');


});



Auth::routes();






Route::get('/home', 'HomeController@index');
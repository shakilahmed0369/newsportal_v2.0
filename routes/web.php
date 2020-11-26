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
    
    //News Routes
    Route::get('/news/response', 'NewsController@getResponse')->name('news.response');
    
    Route::get('/news/trash/{id}', 'NewsController@trash');

    Route::get('/news/trash/recover/{id}', 'NewsController@recoverTrash');

    Route::get('/news/trash', 'NewsController@trashIndex')->name('news.trash.index');

    Route::get('/news/response/trash', 'NewsController@trashResponse')->name('news.trash.response');

    Route::resource('/news', 'NewsController');


});



Auth::routes();






Route::get('/home', 'HomeController@index');
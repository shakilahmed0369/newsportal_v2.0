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


Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'admin.'],function(){
    //Dashboard route
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

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

    
    //Gallery Routes
    Route::get('/gallery/response', 'GalleryController@getResponse')->name('gallery.response');
    Route::resource('/gallery', 'GalleryController');

    //Video Routes
    Route::get('/video/response', 'VideoController@getResponse')->name('video.response');
    Route::resource('/video', 'VideoController');
    

    //Admin Auth Routes
    Route::group(['namespace' => 'Auth', 'middleware' => 'admin.guest'], function () {
        //admin login routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('login');
        //password reset route
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
        
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    });

    //login redirect route
    //Route::get('/dashboard', 'DashboardController@dashboard');



});



Auth::routes();






Route::get('/home', 'HomeController@index');
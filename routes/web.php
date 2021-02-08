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
 * Frontend routes
 */

Route::group(['namespace' => 'Frontend','as' => 'frontend.'], function () {
    // Index Routes.
    Route::get('/', 'FrontendController@index');
    //category routes
    Route::get('/{category}', 'FrontendController@showByCategory')->name('showByCategory');

    //show post Routes
    Route::get('/news/{cat}/{slug}', 'FrontendController@showNews')->name('showNews');
    //search Route
    Route::get('/news/search', 'FrontendController@search')->name('search');
    //pages route
    Route::get('/page/{slug}', 'FrontendController@page')->name('page');

    
    
});



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

    //Pages Route
    Route::get('/page/getresponse', 'PageController@getResponse')->name('page.response');
    Route::resource('/page', 'PageController');

    //siteCustomization Routes
    Route::get('/navcustiomize', 'SiteCustomizationController@showNavIndex')->name('navIndex');
    ///nav customize Route
    Route::post('/navcustiomize/active', 'SiteCustomizationController@activeNavSort')->name('activeNavSort');
    Route::post('/navcustiomize/enactive', 'SiteCustomizationController@enactiveNavSort')->name('enactiveNavSort');

    //home Customize Route
    Route::get('/homecutomize', 'SiteCustomizationController@homeCustomize')->name('homeCustomize');
    Route::post('/homecustomize/update', 'SiteCustomizationController@homeUpdate')->name('homeUpdate');

    //Advertisement routes
    Route::get('/ad/getresponse', 'AdController@getResponse')->name('ad.response');
    Route::resource('/ad', 'AdController');

    //Settings Routes
    Route::get('/settings', 'SettingsController@index')->name('settings.index');
    //Webinfo Rute
    Route::post('/settings/webinfoupdate', 'SettingsController@WebinfoUpdate')->name('settings.webinfoupdate');
    //Webinfo Rute
    Route::post('/settings/contactinfo', 'SettingsController@ContactInfoUpdate')->name('settings.contactInfoUpdate');
    Route::post('/settings/imageupdate', 'SettingsController@ImageUpdate')->name('settings.imageUpdate');

});


//user login route
Auth::routes();






Route::get('/home', 'HomeController@index');
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

Route::get('/', 'MainController@home')->name('home');
Route::get('/firm', 'MainController@theFirm')->name('firm');
Route::get('/people', 'MainController@people')->name('people');
Route::get('/profile', 'MainController@profile')->name('profile');
Route::get('/practice-area', 'MainController@practiceArea')->name('practice-area');
Route::get('/article', 'MainController@article')->name('article');
Route::get('/articles', 'MainController@articles')->name('articles');
Route::get('/contact', 'MainController@contact')->name('contact');

/* BackOffice */
Route::group(['prefix' => 'admin', 'as' => 'admin', 'namespace' => 'Backoffice', 'middleware' => 'auth'], function() {

    Route::get('dashboard', 'DashboardController@index')->name('.dashboard');

    Route::prefix('people')->name(".people")->group(function() {

        Route::get('overview', 'PeopleController@overview')->name('.overview');
        Route::get('add', 'PeopleController@addPeople')->name('.add');
        Route::post('store', 'PeopleController@storePeople')->name('.store');
        Route::get('edit/{people}', 'PeopleController@editPeople')->name('.edit');
        Route::post('update/{people}', 'PeopleController@updatePeople')->name('.update');
        Route::post('delete/{people}', 'PeopleController@deletePeople')->name('.delete');
    });

    Route::prefix('articles')->name(".articles")->group(function() {

        Route::get('overview', 'ArticlesController@overview')->name('.overview');
        Route::get('add', 'ArticlesController@addArticle')->name('.add');
        Route::post('save', 'ArticlesController@saveArticle')->name('.save');
        Route::post('update/{article}', 'ArticlesController@updateArticle')->name('.update');
        Route::get('edit/{article}', 'ArticlesController@editArticle')->name('.edit');
        Route::post('delete/{article}', 'ArticlesController@deleteArticle')->name('.delete');
    });
}); 

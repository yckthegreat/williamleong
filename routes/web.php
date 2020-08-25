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

Route::domain('admin.'. env('APP_URL'))->group(function () {
    Auth::routes();
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'Backoffice\DashboardController@index')->name('home');
        Route::group(['as' => 'admin.'], function () {
            Route::resource('article', 'Backoffice\ArticlesController');
            Route::post('/article/upload-image', 'Backoffice\ArticlesController@upload_image')->name('article.upload-image');
            Route::resource('people', 'Backoffice\PeopleController');
        });
    });
});

Route::group(['middleware' => ['domain']], function () {
    Route::get('/', 'MainController@home')->name('home');
    Route::get('/firm', 'MainController@theFirm')->name('firm');
    Route::get('/people', 'MainController@people')->name('people');

    /* Profiles */
    Route::get('/people/{people}', 'MainController@people_show')->name('people.show');
    // Route::get('/people/william-leong', 'MainController@william')->name('william');
    // Route::get('/people/khairulnisa', 'MainController@khairulnisa')->name('khairulnisa');
    // Route::get('/people/jessie-chong', 'MainController@jessie')->name('jessie');
    // Route::get('/people/chiew-choon-man', 'MainController@man')->name('man');
    // Route::get('/people/rita-heaw', 'MainController@heaw')->name('heaw');

    /* Pratice Areas */
    Route::get('/practice-area/litigation', 'MainController@litigation')->name('litigation');
    Route::get('/practice-area/corperate-and-commercial', 'MainController@corporateCommercial')->name('corporate-commercial');
    Route::get('/practice-area/property-and-conveyancing', 'MainController@propertyConveyancing')->name('property-conveyancing');
    Route::get('/practice-area/consumer-and-business-retail', 'MainController@consumerBusiness')->name('consumer-business');
    Route::get('/practice-area/wills-and-probate', 'MainController@willsProbate')->name('wills-probate');
    Route::get('/practice-area/divorce', 'MainController@divorce')->name('divorce');

    Route::get('/article/{article}', 'MainController@article')->name('article');
    Route::get('/articles', 'MainController@articles')->name('articles');
    Route::get('/contact', 'MainController@contact')->name('contact');

});

/* BackOffice */
// Route::group(['prefix' => 'admin', 'as' => 'admin', 'namespace' => 'Backoffice', 'middleware' => 'auth'], function() {
// Route::group(['prefix' => 'admin', 'as' => 'admin', 'namespace' => 'Backoffice'], function() {

//     Route::get('dashboard', 'DashboardController@index')->name('.dashboard');

//     Route::prefix('people')->name(".people")->group(function() {

//         Route::get('overview', 'PeopleController@overview')->name('.overview');
//         Route::get('add', 'PeopleController@addPeople')->name('.add');
//         Route::post('store', 'PeopleController@storePeople')->name('.store');
//         Route::get('edit/{people}', 'PeopleController@editPeople')->name('.edit');
//         Route::post('update/{people}', 'PeopleController@updatePeople')->name('.update');
//         Route::post('delete/{people}', 'PeopleController@deletePeople')->name('.delete');
//     });

//     Route::prefix('articles')->name(".articles")->group(function() {

//         Route::get('overview', 'ArticlesController@overview')->name('.overview');
//         Route::get('add', 'ArticlesController@addArticle')->name('.add');
//         Route::post('save', 'ArticlesController@saveArticle')->name('.save');
//         Route::post('update/{article}', 'ArticlesController@updateArticle')->name('.update');
//         Route::get('edit/{article}', 'ArticlesController@editArticle')->name('.edit');
//         Route::post('delete/{article}', 'ArticlesController@deleteArticle')->name('.delete');
//     });
// });


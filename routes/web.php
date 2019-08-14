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

Auth::routes(['register' => false]);

Route::get('home','HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware'=>['auth','role:superadmin']], function(){
    Route::get('/', function() {
        return 'hallo';
    });
    Route::resource('user','UserController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route CRUD
Route::get('/bidangstudi','BidangStudiController@index');

Route::resource('article', 'ArticleController');
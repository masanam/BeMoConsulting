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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@viewLanding');
Route::get('/main', 'PagesController@viewLanding');
Route::get('/contact-us', 'PagesController@viewContact');
Route::post('/contact-us', 'PagesController@UpdateContact');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'Admin\UsersController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('menuses', 'Admin\MenusController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('sliders', 'Admin\SlidersController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('contents', 'Admin\ContentsController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('contacts', 'Admin\ContactsController', ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('settings', 'Admin\SettingsController', ["as" => 'admin']);
});

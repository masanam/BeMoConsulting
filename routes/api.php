<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'Admin\UsersAPIController');
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('menuses', 'Admin\MenusAPIController');
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('sliders', 'Admin\SlidersAPIController');
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('contents', 'Admin\ContentsAPIController');
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('contacts', 'Admin\ContactsAPIController');
});

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

    Route::get('logout', 'Auth\LoginController@logout')->name('logout');


    //ADMIN AUTH ///

    //  Auth::routes();
Route::get('/', function () {
    return redirect('/admin/login');
});

    Route::group(['prefix' => 'admin'], function () {

        Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login.form');
        Route::post('/login', 'AdminAuth\LoginController@login')->name('admin.login');
        Route::get('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
         });


    Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'as' => 'admin.',], function () {
        Route::get('/', function () {
            return redirect('/admin/home');
        });

        Route::get('home', 'WEB\Admin\HomeController@index')->name('admin.home');

    });








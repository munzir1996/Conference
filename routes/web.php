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


Auth::routes();
Route::get('language/{lang}', function ($lang) {

    Session::put('locale', $lang);

    // App::setlocale($lang);


    return back();
});
Route::get('/', 'HomeController@index')->name('home');
Route::post('/members', 'HomeController@member')->name('member');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/join', 'HomeController@join')->name('join');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::resource('/users', 'Admin\UserController');
    Route::resource('/sponsers', 'Admin\SponserController');
    Route::resource('/blogs', 'Admin\BlogController');
    Route::resource('/members', 'Admin\MemberController');
    Route::resource('/contacts', 'Admin\ContactController');
    Route::resource('/settings', 'Admin\SettingController');

});

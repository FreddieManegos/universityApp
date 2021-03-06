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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'role:user'],function (){
    Route::resource('/user','UserController');
    Route::resource('/profile','ProfileController');
    Route::resource('/course','CourseController');
    Route::POST('/addFriendRequest', 'FriendRequestController@addFriendRequest');
    Route::POST('/deleteFriendRequest','FriendRequestController@deleteFriendRequest');

});

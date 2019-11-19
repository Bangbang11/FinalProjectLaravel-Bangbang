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

Route::get('signup','UsersController@signup')->name('signup');
Route::post('signupStore','UsersController@signup_store')->name('signup.store');

Route::get('login','SessionsController@login')->name('login');
Route::post('loginStore','SessionsController@login_store')->name('login.store');
Route::get('logout','SessionsController@logout')->name('logout');

// this routes for check if email user is exist in database
Route::get('forgot-password','ReminderController@create')->name('reminders.create');
Route::post('forgot-password','ReminderController@store')->name('reminders.store');

//this routes for handle changes password
Route::get('reset-password/{id}/{token}','ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}','ReminderController@update')->name('reminders.update');
// Route for user
Route::group(['prefix' => 'semua','middleware'=>'sentinel'], function() {
    Route::get('home','HomesController@index')->name('home');
});

//route for Admin
Route::group(['prefix' => 'Admin','middleware'=>['sentinel','hasAdmin']], function() {
    Route::get('homeAdmin','AdminController@index')->name('homeAdmin');
    Route::get('categoryCreate','CategorysController@create')->name('category.create');
    Route::get('jobCreate','JobsController@create')->name('job.create');
    Route::get('jobIndex','JobsController@index')->name('job.index');
    Route::get('biodataCreate','BiodatasController@create')->name('biodata.create');
    Route::get('biodataIndex','BiodatasController@index')->name('biodata.index');
});


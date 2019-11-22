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

   
    Route::get('/', 'WelcomesController@index')->name('beranda');

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
Route::group(['prefix' => 'User','middleware'=>['sentinel','hasUser']], function() {
    Route::get('home/','HomesController@index')->name('home');
    Route::post('biodataUserStore','BiodataUsersController@store')->name('biodatauser.store');
    Route::get('JobUserIndex','JobUsersController@index')->name('jobuser.index');
    Route::get('JobUserShow/{id}','JobUsersController@show')->name('jobuser.show');
    Route::get('JobUserStore/{id}','JobUsersController@store')->name('jobuser.store');
    Route::get('MyApplicationIndex','MyApplicationsController@index')->name('myapplication.index');

});

//route for Admin
Route::group(['prefix' => 'Admin','middleware'=>['sentinel','hasAdmin']], function() {
    Route::get('homeAdmin','AdminController@index')->name('homeAdmin');
    Route::get('categoryCreate','CategorysController@create')->name('category.create');
    Route::post('categoryStore','CategorysController@store')->name('category.store');
    Route::get('jobCreate','JobsController@create')->name('job.create');
    Route::post('jobStore','JobsController@store')->name('job.store');
    Route::get('jobEdit/{id}','JobsController@edit')->name('job.edit');
    Route::post('jobUpdate/{id}','JobsController@update')->name('job.update');
    Route::get('jobDestroy/{id}','JobsController@destroy')->name('job.destroy');
    Route::get('jobIndex','JobsController@index')->name('job.index');
    Route::get('biodataCreate','BiodatasController@create')->name('biodata.create');
    Route::post('biodataStore','BiodatasController@store')->name('biodata.store');
    Route::get('biodataEdit/{id}','BiodatasController@edit')->name('biodata.edit');
    Route::post('biodataUpdate/{id}','BiodatasController@update')->name('biodata.update');
    Route::get('biodataDestroy/{id}','BiodatasController@destroy')->name('biodata.destroy');
    Route::get('biodataIndex','BiodatasController@index')->name('biodata.index');
    Route::get('jobapplicationIndex','JobApplicationsController@index')->name('jobapplication.index');
    Route::get('jobapplicationApprove','JobApplicationsController@approve')->name('jobapplication.approve');
    Route::get('jobapplicationApproveStore/{id}','JobApplicationsController@approve_store')->name('approve.store');
    Route::get('jobapplicationReject','JobApplicationsController@reject')->name('jobapplication.reject');
    Route::get('jobapplicationRejectStore/{id}','JobApplicationsController@reject_store')->name('reject.store');
    Route::get('jobapplicationShow/{id}','JobApplicationsController@show')->name('jobapplication.show');
    Route::get('jobapplicationCV/{id}','JobApplicationsController@cv')->name('cv');
});


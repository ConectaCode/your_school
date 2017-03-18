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

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'platform', 'as' => 'platform.'], function (){

    Route::resource('teachers', 'TeacherController', ['except' => 'destroy']);
    Route::resource('students', 'StudentController', ['except' => 'destroy']);
    Route::resource('responsibles', 'ResponsibleController', ['except' => 'destroy']);
    Route::resource('schools', 'SchoolController', ['except' => 'destroy']);
    Route::resource('teams', 'TeamController', ['except' => 'destroy']);
    Route::resource('secretaryOfEducations', 'SecretaryOfEducationController', ['except' => 'destroy']);
    Route::resource('schoolSecretaries', 'SchoolSecretaryController', ['except' => 'destroy']);
    Route::resource('teams.lessons', 'LessonController', ['except' => 'destroy']);

    Route::group(['prefix' => 'dashboard','as' => 'dashboard.'], function (){
        Route::get('secretaryOfEducation', 'DashboardSecretaryOfEducationController@index')->name('secretaryOfEducation.index');
    });

});

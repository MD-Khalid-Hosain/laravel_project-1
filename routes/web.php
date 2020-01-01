<?php


Route::get('/student/information','InformationController@student')->name('student_information');
Route::post('/student/information/create','InformationController@student_create')->name('student_create');
Route::get('/student/information/list', 'InformationController@student_list')->name('student_list');






















Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php


Route::get('/student/information','InformationController@student')->name('student_information');
Route::post('/student/information/create','InformationController@student_create')->name('student_create');
Route::get('/student/information/list', 'InformationController@student_list')->name('student_list');
Route::get('/student/information/list/{student_id}', 'InformationController@student_single')->name('student_single');
Route::post('/student/information/update','InformationController@student_update')->name('student_update');
Route::get('/student/information/delete/{student_id}','InformationController@student_delete')->name('student_delete');
























Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

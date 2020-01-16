<?php


Route::get('/student/information','InformationController@student')->name('student_information');
Route::post('/student/information/create','InformationController@student_create')->name('student_create');
Route::get('/student/information/list', 'InformationController@student_list')->name('student_list');
Route::get('/student/information/list/{student_id}', 'InformationController@student_single')->name('student_single');
Route::post('/student/information/update','InformationController@student_update')->name('student_update');
Route::get('/student/information/delete/{student_id}','InformationController@student_delete')->name('student_delete');
Route::get('/student/information/type','InformationController@student_type')->name('student_type');
Route::post('/student/information/type/create','InformationController@student_type_create')->name('student_type_create');
Route::get('/student/information/type/delete/{student_id}','InformationController@student_type_delete')->name('student_type_delete');


Route::get('/student/information/trash','InformationController@student_trash')->name('student_trash');

// restore
Route::get('/student/information/restore/{restore_id}','InformationController@student_resotre')->name('student_resotre');
// permanent delete
Route::get('/student/information/permanent/{delete_id}','InformationController@student_permanent_delete')->name('student_permanent_delete');

























Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

//Homepage
Route::get('/', function () {
    return view('index');
});
//Error
Route::get('404', ['as' => '404', 'uses' => 'errorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'errorController@fatal']);
//users
Route::get('/signin','userController@indexLogin');
Route::get('/logincheck','userController@logincheck');
Route::get('/logout','userController@Logout');
Route::get('/signup','userController@indexSignup');



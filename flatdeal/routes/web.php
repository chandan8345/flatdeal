<?php

//Homepage
Route::get('/','homeController@index');
Route::get('/faq','homeController@faq');
Route::get('/getcity','homeController@getcity');
Route::get('/getsubarea','homeController@getsubarea');
Route::get('/getarea','homeController@getarea');
Route::get('/searchads','homeController@searchads');
//Error
Route::get('404', ['as' => '404', 'uses' => 'errorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'errorController@fatal']);
//security
Route::get('/signin','securityController@indexLogin');
Route::get('/logincheck','securityController@logincheck');
Route::get('/logout','securityController@Logout');
Route::get('/signup','securityController@indexSignup');
Route::post('/signupcheck','securityController@signup');
//user
Route::get('/dashbord','userController@index');
//ads-post
Route::get('/ads-post','postController@index');
Route::post('/addpost','postController@addpost');
//ads-view
Route::get('/adsview','adsviewController@index');

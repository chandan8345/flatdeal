<?php
//API

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
//dashbord
Route::get('/dashbord','userController@index');
Route::post('/updateprofile','userController@updateprofile');
Route::get('/activepost','userController@activepost');
Route::get('/waitingpost','userController@waitingpost');
Route::get('/soldpost','userController@soldpost');
Route::get('/activeusers','userController@activeusers');
Route::get('/waitingusers','userController@waitingusers');
Route::get('/expiredusers','userController@expiredusers');
Route::get('/expired','userController@expired');
Route::get('/approvepost','userController@approvepost');
Route::get('/delete','userController@delete');
Route::get('/activeuser','userController@active');
Route::get('/expireduser','userController@active');
Route::get('/sold','userController@sold');
Route::get('/statistics','userController@statistics');
Route::get('/usersstatistics','userController@usersstatistics');
Route::get('/adsupdate','userController@adsupdate');
Route::get('/users','userController@users');
Route::get('/profile','userController@profile');
//ads-post
Route::get('/ads-post','postController@index');
Route::post('/addpost','postController@addpost');
Route::post('/updatepost','postController@updatepost');
//ads-view
Route::get('/adsview','adsviewController@index');
Route::get('/category','adsviewController@category');
Route::post('/getads','adsviewController@getads');
Route::get('/singleads','adsviewController@singleads');

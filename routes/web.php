<?php

// 首页
Route::get('/', 'IndexController@index');

// 后台

/*********** admin ***********/
// 登录页面
Route::get('/login', 'AdminController@login')->name('login');
// 后台主页面
Route::get('/admin/index', 'AdminController@index');

/*********** blog ***********/
// 文章管理主页
Route::get('/blog/index', 'BlogController@index');
Route::get('/blog/add', 'BlogController@add');
Route::get('/blog/edit/{id}', 'BlogController@edit');

//Route::get('/getallblog', 'BlogController@getAllBlog');
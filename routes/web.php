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

//Route::get('/', function () {
////    return view('welcome');
//    return 'Hello World';
//
//});

//Route::get('user/{name}', function ($name) {
//    return 'Welcome back, ' . $name;
//});
//
Route::get('/', 'ArticleController@index');
Route::get('article/addArticle', 'ArticleController@addArticle');
Route::get('article/articleAll', 'ArticleController@findArticleAll');
Route::get('article/findArticleToArray', 'ArticleController@findArticleToArray');
Route::get('article/findArticleToJson', 'ArticleController@findArticleToJson');
Route::get('article/findArticleByCondition', 'ArticleController@findArticleByCondition');
Route::get('article/addArticleBatch', 'ArticleController@addArticleBatch');
Route::get('article/update', 'ArticleController@update');
Route::get('article/findWithError', 'ArticleController@findWithError');
Route::get('article/findFull', 'ArticleController@findFull');
Route::get('article/list', 'ArticleController@articleList');
Route::get('article/detail/{id}', 'ArticleController@detail');

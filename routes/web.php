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
Route::resource('/', 'IndexController', [ 'only' => ['index'], 'names' => ['index' => 'home'] ]);
Route::resource('portfolios', 'PortfolioController', [ 'parameters' => ['portfolios' => 'alias'] ]);
Route::resource('articles', 'ArticleController', [ 'parameters' => ['articles' => 'alias'] ]);
Route::get('articles/cat/{cat_alias?}', ['uses' => 'ArticleController@index', 'as' => 'articlesCat' ] )->where('cat_alias', '[\w-]+');
Route::resource('comment', 'CommentController', ['only' => ['store']]);
Route::match(['get', 'post'], '/contacts', ['uses' => 'ContactsController@index', 'as' => 'contacts']);

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');
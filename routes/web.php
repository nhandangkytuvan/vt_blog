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

Route::get('/',function(){return view('welcome');});
Route::get('home','HomeController@home');
Auth::routes();
// backend
Route::resource('terms', 'TermController');
Route::resource('posts', 'PostController');
Route::resource('configs', 'ConfigController');
Route::resource('users', 'UserController');
Route::resource('medias', 'MediaController');

Route::get('sendmail','MyMailController@sendmail');
Route::get('mydb/terms','MydbController@terms');
Route::get('mydb/posts','MydbController@posts');
Route::get('mydb/medias','MydbController@medias');
Route::get('mydb/users','MydbController@users');


// Term
Route::get('/{term_link?}', 'TermController@view')->where(['term_link'=>'[-a-z0-9]+']);
// Post
Route::get('/{post_link?}.html', 'PostController@view')->where(['post_link'=>'[-a-z0-9]+']);
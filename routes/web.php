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
// home
Route::get('home','HomeController@home');
// auth
Auth::routes();
// backend
// terms
Route::resource('terms', 'TermController');
Route::get('terms/{term}/delete','TermController@delete');
// posts
Route::resource('posts', 'PostController');
Route::get('posts/{post}/delete','PostController@delete');
// configs
Route::resource('configs', 'ConfigController');
Route::get('configs/{config}/delete','ConfigController@delete');
// users
Route::resource('users', 'UserController');
// medias
Route::resource('medias', 'MediaController');
Route::get('medias/{media}/delete','MediaController@delete');
// mails
Route::get('sendmail','MyMailController@sendmail');
//
Route::get('mydb/terms','MydbController@terms');
Route::get('mydb/posts','MydbController@posts');
Route::get('mydb/medias','MydbController@medias');
Route::get('mydb/users','MydbController@users');


// Term
Route::get('/{term_link?}', 'TermController@view')->where(['term_link'=>'[-a-z0-9]+']);
// Post
Route::get('/{post_link?}.html', 'PostController@view')->where(['post_link'=>'[-a-z0-9]+']);
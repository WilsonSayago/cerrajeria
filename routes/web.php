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

Route::get('/', 'IndexController@index');
Route::get('/contactanos', 'IndexController@contact');
Route::get('/quienes_somos', 'IndexController@about');


Route::resource('mail', 'MailController');
Route::get('twitterUserTimeLine', 'TwitterController@twitterUserTimeLine');
Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);

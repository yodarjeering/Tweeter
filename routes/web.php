<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/tweeter/auth', 'AuthController@getAuth');
Route::post('/tweeter/auth', 'AuthController@postAuth');

Route::get('/tweeter', 'TweetController@index');
Route::get('/tweeter/tweet', 'TweetController@add');
Route::post('/tweeter/tweet', 'TweetController@create');

Route::get('/tweeter/reply_list', 'ReplyController@index');
Route::get('/tweeter/reply', 'ReplyController@add');
Route::post('/tweeter/reply', 'ReplyController@create');

Route::get('/user/search', 'UserController@index');
Route::post('/user/search', 'UserController@search');
Route::post('/user/create', 'UserController@create');

Route::get('/user/mypage', 'MypageController@index');
Route::get('/user/follow_list', 'MypageController@search');
Route::post('/user/follow_list', 'MypageController@delete_follow');
Route::post('/user/follow_list', 'MypageController@create_follow');


//Route::get('/user/follower_list', 'HomeController@search_follower');
//Route::post('/user/follower_list', 'HomeController@delete_follower');


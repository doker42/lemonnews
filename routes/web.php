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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=> ['cors','web']], function () {
//Route::group(['middleware'=> 'cors'], function () {

    Route::match(['post', 'get'],'/addNews',    ['uses' => "NewsController@addNews", 'as' => 'addNews']);

    Route::match(['post', 'get'], '/addEvent',    ['uses' => "EventsController@addEvent", 'as' => 'addEvent']);

//    Route::get('/getNews', ['uses' => "NewsController@getNews", 'as' => 'getNews']);

    Route::get('/getNews', "NewsController@getNews");

    Route::get('/getComments', ['uses' => "CommentController@getComments", 'as' => 'getComments']);

    Route::match(['post', 'get'],'/addComment', ['uses' => "CommentController@addComment", 'as' => 'addComment']);

});


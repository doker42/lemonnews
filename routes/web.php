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

    Route::match(['post', 'get'],'/addNews',    ['uses' => "NewsController@addNews", 'as' => 'addNews']);

    Route::match(['post', 'get'], '/addEvent',    ['uses' => "EventsController@addEvent", 'as' => 'addEvent']);

    Route::get('/getNews', "NewsController@getNews");

    Route::get('/getComments', ['uses' => "CommentController@getComments", 'as' => 'getComments']);

    Route::get('/getSubComments', ['uses' => "CommentController@getSubComments", 'as' => 'getSubComments']);

    Route::match(['post', 'get'],'/addComment', ['uses' => "CommentController@addComment", 'as' => 'addComment']);

//    Route::match(['post', 'get'],'/addSubComment', ['uses' => "CommentController@addSubComment", 'as' => 'addSubComment']);

});


Route::options('{any}', ['middleware' => ['cors'], function () {

    return response(['status' => 'success']);

}])->where('any', '.*');

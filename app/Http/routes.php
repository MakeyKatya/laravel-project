<?php

//По умолчанию
/*Route::get('/', function () {
    return view('welcome');
});*/

//Видеоуроки

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


/*Route::get('articles','ArticleController@index');
Route::get('articles/create','ArticleController@create');
Route::get('articles/{id}','ArticleController@show');
Route::post('articles','ArticleController@store');*/
Route::resource('articles','ArticleController');

Route::get('/',['uses'=>'HomeController@index','as'=>'home']);

Route::get('message/{id}/edit',['uses'=>'HomeController@edit','as'=>'message.edit'])->where(['id'=>'[0-9]+']) ;


/*____________________________________________________________________________________________*/



//Courses

/*Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::post('/like/{id}','PostController@like');
    Route::post('/dislike/{id}','PostController@dislike');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/article', 'PostController@index');
    Route::get('/article/{id}', 'PostController@show_post');


    Route::get('/home', 'HomeController2@index');
});*/

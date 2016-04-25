<?php
//Видеоуроки


Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');
    Route::get('about', 'PagesController@about');
    Route::get('contact', 'PagesController@contact');


    Route::resource('articles','ArticleController');

    Route::auth();

});

Route::get('tags/{tags}','TagsController@show');


<?php

Auth::routes();

Route::name('profile')->get('/profiles/{user}', 'ProfilesController@show');
Route::name('docs')->get('/docs', 'HomeController@docs');
Route::name('home')->get('/', 'HomeController@index');
Route::name('page')->get('{url}', 'PageController')->where('url', '.*');

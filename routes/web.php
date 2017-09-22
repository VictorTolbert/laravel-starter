<?php
Auth::routes();

// Route::get('/', function () {
//     return redirect('/podcasts');
// });

Route::get('/podcasts', 'PodcastsController@index');
Route::get('/podcasts/new', 'PodcastsController@create');
Route::post('/podcasts', 'PodcastsController@store');
Route::get('/podcasts/{id}', 'PodcastsController@show');
Route::get('/podcasts/{id}/edit', 'PodcastsController@edit');
Route::patch('/podcasts/{id}', 'PodcastsController@update');
Route::delete('/podcasts/{id}', 'PodcastsController@destroy');

Route::get('/episodes', 'EpisodesController@index');
Route::get('/episodes/{id}', 'EpisodesController@show');
Route::get('/episodes/{id}/edit', 'EpisodesController@edit');
Route::patch('/episodes/{id}', 'EpisodesController@update');

Route::get('/podcasts/{id}/episodes', 'PodcastEpisodesController@index');
Route::post('/podcasts/{id}/episodes', 'PodcastEpisodesController@store');
Route::get('/podcasts/{id}/episodes/new', 'PodcastEpisodesController@create');

Route::put('/podcasts/{id}/cover-image', 'PodcastCoverImageController@update');

Route::post('/subscriptions', 'SubscriptionsController@store');
Route::delete('/subscriptions/{id}', 'SubscriptionsController@destroy');

Route::post('/published-podcasts', 'PublishedPodcastsController@store');
Route::delete('/published-podcasts/{id}', 'PublishedPodcastsController@destroy');

Route::group(['prefix' => 'proposal-viewer'], function () {
    Route::get('/', ['as' => 'proposal-viewer.index', 'uses' => 'ProposalViewerController@index']);
    Route::any('show', ['as' => 'proposal-viewer.show', 'uses' => 'ProposalViewerController@show']);
});

Route::name('profile')->get('/profiles/{user}', 'ProfilesController@show');
Route::name('changelog')->get('/changelog', 'PagesController@changelog');
Route::name('blog')->get('/blog', 'PagesController@blog');
Route::name('charts')->get('/charts', 'PagesController@charts');
Route::name('dashboard')->get('/dashboard', 'PagesController@dashboard');
Route::name('docs')->get('/docs', 'PagesController@docs');
Route::name('icons')->get('/icons', 'PagesController@icons');
Route::name('kendo')->get('/kendo', 'PagesController@kendo');
Route::name('tables')->get('/tables', 'PagesController@tables');
Route::name('team')->get('/team', 'PagesController@team');
Route::name('test')->get('/test', 'PagesController@test');
Route::name('zurb')->get('/zurb', 'PagesController@zurb');
Route::name('home')->get('/', function () {
    return redirect()->route('tables');
});

Route::name('page')->get('{url}', 'PageController')->where('url', '.*');



// Route::group(['prefix'=>'help','as'=>'help'],function() {
//     Route::any('/',function() {
//         return Redirect::route('contact');
//     });
// });

<?php
Auth::routes();

// Route::get('/', function () {
//     return redirect('/podcasts');
// });

Route::name('podcasts')->get('/podcasts', 'PodcastsController@index');
Route::get('/podcasts/new', 'PodcastsController@create');
Route::post('/podcasts', 'PodcastsController@store');
Route::get('/podcasts/{id}', 'PodcastsController@show');
Route::get('/podcasts/{id}/edit', 'PodcastsController@edit');
Route::patch('/podcasts/{id}', 'PodcastsController@update');
Route::delete('/podcasts/{id}', 'PodcastsController@destroy');

Route::name('episodes')->get('/episodes', 'EpisodesController@index');
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

Route::name('account-performance')->get('/account-performance', 'PagesController@accountPerformance');
Route::name('avails')->get('/avails', 'PagesController@avails');
// Route::name('base')->get('/base', 'PagesController@base');
Route::name('blog')->get('/blog', 'PagesController@blog');
Route::name('campaign-performance')->get('/campaign-performance', 'PagesController@campaignPerformance');
Route::name('changelog')->get('/changelog', 'PagesController@changelog');
// Route::name('charts')->get('/charts', 'PagesController@charts');
// Route::name('columns')->get('/columns', 'PagesController@columns');
// Route::name('components')->get('/components', 'PagesController@components');
// Route::name('core-values')->get('/core-values', 'PagesController@core-values');
Route::name('dashboard')->get('/dashboard', 'PagesController@dashboard');
// Route::name('design-engineering')->get('/design-engineering', 'PagesController@design-engineering');
// Route::name('design-system')->get('/design-system', 'PagesController@design-system');
Route::name('docs')->get('/docs', 'PagesController@docs');
// Route::name('elements')->get('/elements', 'PagesController@elements');
// Route::name('features')->get('/features', 'PagesController@features');
// Route::name('form-controls')->get('/form-controls', 'PagesController@form-controls');
// Route::name('frontend-interview-questions')->get('/frontend-interview-questions', 'PagesController@frontend-interview-questions');
// Route::name('glossary')->get('/glossary', 'PagesController@glossary');
// Route::name('goals')->get('/goals', 'PagesController@goals');
Route::name('help')->get('/help', 'PagesController@help');
Route::name('icons')->get('/icons', 'PagesController@icons');
Route::name('colors')->get('/colors', 'PagesController@colors');
// Route::name('initiatives')->get('/initiatives', 'PagesController@initiatives');
// Route::name('kendo')->get('/kendo', 'PagesController@kendo');
// Route::name('layout')->get('/layout', 'PagesController@layout');
// Route::name('modifiers')->get('/modifiers', 'PagesController@modifiers');
// Route::name('movies')->get('/movies', 'PagesController@movies');
// Route::name('navigation')->get('/navigation', 'PagesController@navigation');
// Route::name('onepage')->get('/onepage', 'PagesController@onepage');
Route::name('open-preempts')->get('/open-preempts', 'PagesController@openPreempts');
Route::name('order-management')->get('/order-management', 'PagesController@orderManagement');
Route::name('order-reporting')->get('/order-reporting', 'PagesController@orderReporting');
Route::name('order-search')->get('/order-search', 'PagesController@orderSearch');
// Route::name('overview')->get('/overview', 'PagesController@order-search');
Route::name('pending-makegoods')->get('/pending-makegoods', 'PagesController@pendingMakegoods');
Route::name('pending-orders')->get('/pending-orders', 'PagesController@pendingOrders');
Route::name('price-guide')->get('/price-guide', 'PagesController@priceGuide');
Route::name('privacy')->get('/privacy', 'PagesController@privacy');
Route::name('profile')->get('/profiles/{user}', 'ProfilesController@show');
Route::name('program-revenue')->get('/program-revenue', 'PagesController@programRevenue');
Route::name('reporting')->get('/reporting', 'PagesController@reporting');
Route::name('settings')->get('/settings', 'PagesController@settings');
Route::name('tables')->get('/tables', 'PagesController@tables');
// Route::name('team')->get('/team', 'PagesController@team');
// Route::name('templates')->get('/templates', 'PagesController@templates');
Route::name('terms')->get('/terms', 'PagesController@terms');
// Route::name('test')->get('/test', 'PagesController@test');
// Route::name('tools')->get('/tools', 'PagesController@tools');
// Route::name('trends')->get('/trends', 'PagesController@trends');
// Route::name('user-stories')->get('/user-stories', 'PagesController@user-stories');
// Route::name('view')->get('/view', 'PagesController@view');
// Route::name('zurb')->get('/zurb', 'PagesController@zurb');


Route::name('home')->get('/', function () {
    return redirect()->route('tables');
});

Route::name('page')->get('{url}', 'PageController')->where('url', '.*');



// Route::group(['prefix'=>'help','as'=>'help'],function() {
//     Route::any('/',function() {
//         return Redirect::route('contact');
//     });
// });

<?php
Auth::routes();

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


// Global
    Route::name('privacy')->get('/privacy', 'PagesController@privacy');
    Route::name('settings')->get('/settings', 'PagesController@settings');
    Route::name('sitemap')->get('/sitemap', 'PagesController@sitemap');
    Route::name('terms')->get('/terms', 'PagesController@terms');

// Atomic Design
    Route::name('atomic-design')->get('/atomic-design', 'PagesController@atomicDesign');
    Route::name('atoms')->get('/atoms', 'PagesController@atoms');
    Route::name('molecules')->get('/molecules', 'PagesController@molecules');
    Route::name('organisms')->get('/organisms', 'PagesController@organisms');
    Route::name('templates')->get('/templates', 'PagesController@templates');
    Route::name('pages')->get('/pages', 'PagesController@pages');

// Bulma
    // Overview
        Route::name('overview')->get('/overview', 'PagesController@order-search');
        Route::name('design-tokens')->get('/design-tokens', 'PagesController@designTokens');
        Route::name('colors')->get('/colors', 'PagesController@colors');
        Route::name('icons')->get('/icons', 'PagesController@icons');
        Route::name('typography')->get('/typography', 'PagesController@typography');

    // Modifiers
        Route::name('modifiers')->get('/modifiers', 'PagesController@modifiers');
        Route::name('spacing')->get('/spacing', 'PagesController@spacing');

    // Columns
        Route::name('columns')->get('/columns', 'PagesController@columns');

    // Layout
        Route::name('layout')->get('/layout', 'PagesController@layout');

    // Form
        Route::name('form')->get('/form', 'PagesController@form');

    // Elements
        Route::name('buttons')->get('/buttons', 'PagesController@buttons');
        Route::name('elements')->get('/elements', 'PagesController@elements');


    // Components
        Route::name('components')->get('/components', 'PagesController@components');
        Route::name('data-table')->get('/data-table', 'PagesController@dataTable');
        Route::name('panel')->get('/panel', 'PagesController@panel');
        Route::name('navbars')->get('/navbars', 'PagesController@navbars');

// Seller Pages
    Route::name('account-performance')->get('/account-performance', 'PagesController@accountPerformance');
    Route::name('avails')->get('/avails', 'PagesController@avails');
    Route::name('campaign-performance')->get('/campaign-performance', 'PagesController@campaignPerformance');
    Route::name('open-preempts')->get('/open-preempts', 'PagesController@openPreempts');
    Route::name('order-management')->get('/order-management', 'PagesController@orderManagement');
    Route::name('order-reporting')->get('/order-reporting', 'PagesController@orderReporting');
    Route::name('order-search')->get('/order-search', 'PagesController@orderSearch');
    Route::name('pending-makegoods')->get('/pending-makegoods', 'PagesController@pendingMakegoods');
    Route::name('pending-orders')->get('/pending-orders', 'PagesController@pendingOrders');
    Route::name('price-guide')->get('/price-guide', 'PagesController@priceGuide');
    Route::name('program-revenue')->get('/program-revenue', 'PagesController@programRevenue');
    Route::name('reporting')->get('/reporting', 'PagesController@reporting');

Route::name('base')->get('/base', 'PagesController@base');
Route::name('blog')->get('/blog', 'PagesController@blog');
Route::name('changelog')->get('/changelog', 'PagesController@changelog');
Route::name('content')->get('/content', 'PagesController@content');
Route::name('charts')->get('/charts', 'PagesController@charts');
Route::name('core-values')->get('/core-values', 'PagesController@coreValues');
Route::name('dashboard')->get('/dashboard', 'PagesController@dashboard');
Route::name('design-engineering')->get('/design-engineering', 'PagesController@designEngineering');
Route::name('design-system')->get('/design-system', 'PagesController@designSystem');
Route::name('docs')->get('/docs', 'PagesController@docs');
Route::name('features')->get('/features', 'PagesController@features');
Route::name('frontend-interview-questions')->get('/frontend-interview-questions', 'PagesController@frontendInterviewQuestions');
Route::name('glossary')->get('/glossary', 'PagesController@glossary');
Route::name('goals')->get('/goals', 'PagesController@goals');
Route::name('help')->get('/help', 'PagesController@help');
Route::name('initiatives')->get('/initiatives', 'PagesController@initiatives');
Route::name('kendo')->get('/kendo', 'PagesController@kendo');
Route::name('layouts')->get('/layouts', 'PagesController@layouts');
Route::name('movies')->get('/movies', 'PagesController@movies');
Route::name('navigation')->get('/navigation', 'PagesController@navigation');
Route::name('onepage')->get('/onepage', 'PagesController@onepage');
Route::name('page-headers')->get('/page-headers', 'PagesController@pageHeaders');
Route::name('profile')->get('/profiles/{user}', 'ProfilesController@show');
// Route::name('table')->get('/table', 'PagesController@table');
Route::name('design-team')->get('/design-team', 'PagesController@designTeam');
Route::name('product-team')->get('/product-team', 'PagesController@productTeam');
Route::name('scratch')->get('/scratch', 'PagesController@scratch');
Route::name('team')->get('/team', 'PagesController@team');
Route::name('test')->get('/test', 'PagesController@test');
Route::name('tools')->get('/tools', 'PagesController@tools');
Route::name('trends')->get('/trends', 'PagesController@trends');
Route::name('user-stories')->get('/user-stories', 'PagesController@userStories');
Route::name('view')->get('/view', 'PagesController@view');
Route::name('zurb')->get('/zurb', 'PagesController@zurb');

Route::name('home')->get('/', function () {
    return redirect()->route('dashboard');
    // return redirect()->route('navbars');
    // return redirect()->route('data-table');
});

Route::name('page')->get('{url}', 'PageController')->where('url', '.*');



// Route::group(['prefix'=>'help','as'=>'help'],function() {
//     Route::any('/',function() {
//         return Redirect::route('contact');
//     });
// });

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
        Route::name('overview')->get('/overview', 'PagesController@overview');
        Route::name('changelog')->get('/changelog', 'PagesController@changelog');
        Route::name('classes')->get('/classes', 'PagesController@classes');
        Route::name('colors')->get('/colors', 'PagesController@colors');
        Route::name('customize')->get('/customize', 'PagesController@customize');
        Route::name('design-tokens')->get('/design-tokens', 'PagesController@designTokens');
        Route::name('functions')->get('/functions', 'PagesController@functions');
        Route::name('introduction')->get('/introduction', 'PagesController@introduction');
        Route::name('mixins')->get('/mixins', 'PagesController@mixins');
        Route::name('modular')->get('/modular', 'PagesController@modular');
        // Route::name('responsiveness')->get('/responsiveness', 'PagesController@responsiveness');
        Route::name('start')->get('/start', 'PagesController@start');
        Route::name('tips')->get('/tips', 'PagesController@tips');
        Route::name('typography')->get('/typography', 'PagesController@typography');
        Route::name('variables')->get('/variables', 'PagesController@variables');

    // Modifiers
        Route::name('modifiers')->get('/modifiers', 'PagesController@modifiers');
        Route::name('helpers')->get('/helpers', 'PagesController@helpers');
        Route::name('responsive-helpers')->get('/responsive-helpers', 'PagesController@responsiveHelpers');
        Route::name('syntax')->get('/syntax', 'PagesController@syntax');
        Route::name('spacing')->get('/spacing', 'PagesController@spacing');
        Route::name('typography-helpers')->get('/typography-helpers', 'PagesController@typographyHelpers');

    // Columns
        Route::name('columns')->get('/columns', 'PagesController@columns');
        Route::name('basics')->get('/basics', 'PagesController@basics');
        Route::name('gap')->get('/gap', 'PagesController@gap');
        Route::name('nesting')->get('/nesting', 'PagesController@nesting');
        Route::name('options')->get('/options', 'PagesController@options');
        Route::name('responsiveness')->get('/responsiveness', 'PagesController@responsiveness');
        Route::name('sizes')->get('/sizes', 'PagesController@sizes');

    // Layout
        Route::name('layout')->get('/layout', 'PagesController@layout');
        Route::name('container')->get('/container', 'PagesController@container');
        Route::name('footer')->get('/footer', 'PagesController@footer');
        Route::name('hero')->get('/hero', 'PagesController@hero');
        Route::name('level')->get('/level', 'PagesController@level');
        Route::name('media-object')->get('/media-object', 'PagesController@mediaObject');
        Route::name('section')->get('/section', 'PagesController@section');
        Route::name('tiles')->get('/tiles', 'PagesController@tiles');

    // Form
        Route::name('form')->get('/form', 'PagesController@form');
        Route::name('autocomplete')->get('/autocomplete', 'PagesController@autocomplete');
        Route::name('checkbox')->get('/checkbox', 'PagesController@checkbox');
        Route::name('datepicker')->get('/datepicker', 'PagesController@datepicker');
        Route::name('field')->get('/field', 'PagesController@field');
        Route::name('file')->get('/file', 'PagesController@file');
        Route::name('input')->get('/input', 'PagesController@input');
        Route::name('radio')->get('/radio', 'PagesController@radio');
        Route::name('select')->get('/select', 'PagesController@select');
        Route::name('slider')->get('/slider', 'PagesController@slider');
        Route::name('switch')->get('/switch', 'PagesController@switch');
        Route::name('textarea')->get('/textarea', 'PagesController@textarea');
        Route::name('upload')->get('/upload', 'PagesController@upload');

    // Elements
        Route::name('elements')->get('/elements', 'PagesController@elements');
        Route::name('box')->get('/box', 'PagesController@box');
        Route::name('button')->get('/button', 'PagesController@button');
        Route::name('content')->get('/content', 'PagesController@content');
        Route::name('delete')->get('/delete', 'PagesController@delete');
        Route::name('divider')->get('/divider', 'PagesController@divider');
        Route::name('form')->get('/form', 'PagesController@form');
        Route::name('icons')->get('/icons', 'PagesController@icons');
        Route::name('image')->get('/image', 'PagesController@image');
        Route::name('notification')->get('/notification', 'PagesController@notification');
        Route::name('pageloader')->get('/pageloader', 'PagesController@pageloader');
        Route::name('progress')->get('/progress', 'PagesController@progress');
        Route::name('table')->get('/table', 'PagesController@table');
        Route::name('tag')->get('/tag', 'PagesController@tag');
        Route::name('title')->get('/title', 'PagesController@title');
        Route::name('tooltip')->get('/tooltip', 'PagesController@tooltip');

    // Components
        Route::name('components')->get('/components', 'PagesController@components');
        Route::name('alert')->get('/alert', 'PagesController@alert');
        Route::name('badge')->get('/badge', 'PagesController@badge');
        Route::name('breadcrumb')->get('/breadcrumb', 'PagesController@breadcrumb');
        Route::name('card')->get('/card', 'PagesController@card');
        Route::name('calendar')->get('/calendar', 'PagesController@calendar');
        Route::name('collapse')->get('/collapse', 'PagesController@collapse');
        Route::name('data-table')->get('/data-table', 'PagesController@dataTable');
        Route::name('dropdown')->get('/dropdown', 'PagesController@dropdown');
        Route::name('icon')->get('/icon', 'PagesController@icon');
        Route::name('menu')->get('/menu', 'PagesController@menu');
        Route::name('modal')->get('/modal', 'PagesController@modal');
        Route::name('navbar')->get('/navbar', 'PagesController@navbar');
        Route::name('pagination')->get('/pagination', 'PagesController@pagination');
        Route::name('panel')->get('/panel', 'PagesController@panel');
        Route::name('popover')->get('/popover', 'PagesController@popover');
        Route::name('table')->get('/table', 'PagesController@table');
        Route::name('tabs')->get('/tabs', 'PagesController@tabs');
        Route::name('tooltip')->get('/tooltips', 'PagesController@tooltip');

    // Notices // Extensions
        Route::name('notices')->get('/notices', 'PagesController@notices');
        Route::name('dialog')->get('/dialog', 'PagesController@dialog');
        Route::name('loading')->get('/loading', 'PagesController@loading');
        Route::name('message')->get('/message', 'PagesController@message');
        Route::name('notification')->get('/notification', 'PagesController@notification');
        Route::name('snackbar')->get('/snackbar', 'PagesController@snackbar');
        Route::name('toast')->get('/toast', 'PagesController@toast');


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
Route::name('charts')->get('/charts', 'PagesController@charts');
Route::name('core-values')->get('/core-values', 'PagesController@coreValues');
Route::name('dashboard')->get('/dashboard', 'PagesController@dashboard');
Route::name('design-engineering')->get('/design-engineering', 'PagesController@designEngineering');
Route::name('design-system')->get('/design-system', 'PagesController@designSystem');
Route::name('design-team')->get('/design-team', 'PagesController@designTeam');
Route::name('docs')->get('/docs', 'PagesController@docs');
Route::name('features')->get('/features', 'PagesController@features');
Route::name('flexbox-offcanvas')->get('/flexbox-offcanvas', 'PagesController@flexboxOffcanvas');
Route::name('frontend-interview-questions')->get('/frontend-interview-questions', 'PagesController@frontendInterviewQuestions');
Route::name('glossary')->get('/glossary', 'PagesController@glossary');
Route::name('goals')->get('/goals', 'PagesController@goals');
Route::name('grid')->get('/grid', 'PagesController@grid');
Route::name('help')->get('/help', 'PagesController@help');
Route::name('initiatives')->get('/initiatives', 'PagesController@initiatives');
Route::name('kendo')->get('/kendo', 'PagesController@kendo');
Route::name('layouts')->get('/layouts', 'PagesController@layouts');
Route::name('maintenance')->get('/maintenance', 'PagesController@maintenance');
Route::name('movies')->get('/movies', 'PagesController@movies');
Route::name('navigation')->get('/navigation', 'PagesController@navigation');
Route::name('onepage')->get('/onepage', 'PagesController@onepage');
Route::name('page-headers')->get('/page-headers', 'PagesController@pageHeaders');
Route::name('profile')->get('/profiles/{user}', 'ProfilesController@show');
Route::name('product-team')->get('/product-team', 'PagesController@productTeam');
Route::name('portfolio')->get('/portfolio', 'PagesController@portfolio');
Route::name('scratch')->get('/scratch', 'PagesController@scratch');
Route::name('slds')->get('/slds', 'PagesController@slds');
Route::name('team')->get('/team', 'PagesController@team');
Route::name('test')->get('/test', 'PagesController@test');
Route::name('toc')->get('/toc', 'PagesController@toc');
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

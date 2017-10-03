<div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">
        <span>Prototypes</span>
    </a>

    <div class="navbar-dropdown">
        {{-- <a class="navbar-item" href="{{ route('order-management') }}">
            <span>Order Management</span>
        </a> --}}
        <a class="navbar-item" href="{{ route('pending-orders') }}">
            <span>Pending Orders</span>
        </a>

        <a class="navbar-item" href="{{ route('pending-makegoods') }}">
            <span>Pending Makegoods</span>
        </a>

        <a class="navbar-item" href="{{ route('open-preempts') }}">
            <span>Open Preempts</span>
        </a>

        <a class="navbar-item" href="{{ route('order-search') }}">
            <span>Order Search</span>
        </a>

        <hr class="navbar-divider">

        {{-- <a class="navbar-item" href="{{ route('reporting') }}">
            <span>Reporting</span>
        </a> --}}

        <a class="navbar-item" href="{{ route('account-performance') }}">
            <span>Account Performance</span>
        </a>

        <a class="navbar-item" href="{{ route('program-revenue') }}">
            <span>Program Revenue</span>
        </a>

        <a class="navbar-item" href="{{ route('order-reporting') }}">
            <span>Order Reporting</span>
        </a>

        <hr class="navbar-divider">

        <a class="navbar-item" href="{{ route('avails') }}">
            <span>Avails</span>
        </a>

        <a class="navbar-item" href="{{ route('price-guide') }}">
            <span>Price Guide</span>
        </a>

        <a class="navbar-item" href="{{ route('campaign-performance') }}">
            <span>Campaign Performance</span>
        </a>

        <hr class="navbar-divider">

        @include('partials.navbar-items.xml-proposal-viewer')
    </div>
</div>
{{--
Route::name('base')->get('/base', 'PagesController@base');
Route::name('blog')->get('/blog', 'PagesController@blog');
Route::name('changelog')->get('/changelog', 'PagesController@changelog');
Route::name('charts')->get('/charts', 'PagesController@charts');
Route::name('core-values')->get('/core-values', 'PagesController@coreValues');
Route::name('dashboard')->get('/dashboard', 'PagesController@dashboard');
Route::name('design-engineering')->get('/design-engineering', 'PagesController@designEngineering');
Route::name('design-system')->get('/design-system', 'PagesController@designSystem');
Route::name('design-team')->get('/design-team', 'PagesController@designTeam');
Route::name('docs')->get('/docs', 'PagesController@docs');
Route::name('features')->get('/features', 'PagesController@features');
Route::name('frontend-interview-questions')->get('/frontend-interview-questions', 'PagesController@frontendInterviewQuestions');
Route::name('glossary')->get('/glossary', 'PagesController@glossary');
Route::name('goals')->get('/goals', 'PagesController@goals');
Route::name('grid')->get('/grid', 'PagesController@grid');
Route::name('help')->get('/help', 'PagesController@help');
Route::name('initiatives')->get('/initiatives', 'PagesController@initiatives');
Route::name('kendo')->get('/kendo', 'PagesController@kendo');
Route::name('layouts')->get('/layouts', 'PagesController@layouts');
Route::name('movies')->get('/movies', 'PagesController@movies');
Route::name('navigation')->get('/navigation', 'PagesController@navigation');
Route::name('onepage')->get('/onepage', 'PagesController@onepage');
Route::name('page-headers')->get('/page-headers', 'PagesController@pageHeaders');
Route::name('profile')->get('/profiles/{user}', 'ProfilesController@show');
Route::name('product-team')->get('/product-team', 'PagesController@productTeam');
Route::name('scratch')->get('/scratch', 'PagesController@scratch');
Route::name('slds')->get('/slds', 'PagesController@slds');
Route::name('team')->get('/team', 'PagesController@team');
Route::name('test')->get('/test', 'PagesController@test');
Route::name('tools')->get('/tools', 'PagesController@tools');
Route::name('trends')->get('/trends', 'PagesController@trends');
Route::name('user-stories')->get('/user-stories', 'PagesController@userStories');
Route::name('view')->get('/view', 'PagesController@view');
Route::name('zurb')->get('/zurb', 'PagesController@zurb');
 --}}

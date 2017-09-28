<nav class="navbar is-tertiary" role="navigation" aria-label="navigation">
    <div class="container is-fluid">
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-brand">
                <a class="navbar-item">
                    @include('partials.svgs.videa-logo--white')
                </a>
            </div>
            <div class="navbar-start">
                @include('partials.navbar-items.order-management')
                @include('partials.navbar-items.reporting')
                @include('partials.navbar-items.price-guide')
                @include('partials.navbar-items.avails')
                @include('partials.navbar-items.campaign-performance')
            </div>
            <div class="navbar-end">
                @include('partials.navbar-items.help')
            </div>
        </div>
    </div>
</nav>


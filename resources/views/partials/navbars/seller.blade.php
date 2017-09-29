<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                @include('partials.svgs.videa-logo')
            </a>
            <span class="navbar-burger" data-target="navbar-main">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>

        <div class="navbar-menu" id="navbar-main">
            <div class="navbar-start">
                @if (Auth::guest())
                @else
                    @include('partials.navbar-items.order-management')
                    @include('partials.navbar-items.reporting')
                    @include('partials.navbar-items.price-guide')
                    @include('partials.navbar-items.avails')
                    @include('partials.navbar-items.campaign-performance')
                @endif
            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                @else
                    {{-- @include('partials.navbar-items.settings') --}}
                    @include('partials.navbar-items.user-dropdown')
                @endif
            </div>
        </div>
    </div>
</nav>


<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                @include('partials.svg.uxlab-logo')
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
                @endif
            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                @else
                @endif
            </div>
        </div>
    </div>
</nav>

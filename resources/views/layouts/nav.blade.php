<nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                @include('partials.svg.uxlab-logo')
            </a>
            <a class="navbar-item is-active" href="http://bulma.io/documentation/components/breadcrumb/">
                Components
            </a>

            <span class="navbar-burger" data-target="navbarMain" @click="isActive = !isActive">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>

        <div class="navbar-menu" id="navbarMain">
            <div class="navbar-start">
                @if (Auth::guest())
                @else
                @endif
            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                @else
                    @include('partials.navbar-items.user-dropdown')
                @endif
            </div>
        </div>
    </div>
</nav>

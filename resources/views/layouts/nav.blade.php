<div class="container is-fluid">
    <nav class="navbar is-transparent" role="navigation" aria-label="main navigation" style="height: 4rem;">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                @include('partials.svg.logo')
            </a>

            <span class="navbar-burger" data-target="navMenuIndex">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>

        <div class="navbar-menu" id="navMenuIndex">
            <div class="navbar-start">
            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        Documentation
                    </div>
                    <div id="moreDropdown" class="navbar-dropdown">
                        <a class="navbar-item" href="/pages/overview">
                            Overview
                        </a>
                        <a class="navbar-item" href="/pages/components">
                            Components
                        </a>
                        <a class="navbar-item" href="/pages/tips">
                            Tips
                        </a>
                        <a class="navbar-item" href="/pages/tips">
                            Tools
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        Experiments
                    </div>
                    <div id="experimentsDropdown" class="navbar-dropdown">
                        <a href="/changelog" class="navbar-item">Changelog</a>
                        <a href="/proposal-viewer" class="navbar-item">XML Proposal Viewer</a>
                        <a href="/podcasts" class="navbar-item">Podcasts</a>
                        <a href="/episodes" class="navbar-item">Episodes</a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </div>
                    <div id="moreDropdown" class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('profile', Auth::user()) }}">My Profile</a>
                        <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </div>
                </div>
                <a class="navbar-item" data-show="quickview" data-target="quickviewDefault">
                      <b-icon icon="sliders" pack="fa" size="is-large">
                      </b-icon>
                </a>
                @endif
            </div>
        </div>
    </nav>
</div>


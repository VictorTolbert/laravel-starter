<div>
    <div class="container is-fluid">
        <nav class="navbar is-transparent">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ route('home') }}">
                    @include('partials.svg.logo')
                    <span class="is-inline-flex">&nbsp;Design Engineering</span>
                </a>

                <div class="navbar-burger burger" data-target="navMenuIndex">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
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
                                    Utilities
                                </a>
                                <a class="navbar-item" href="/pages/components">
                                    Base
                                </a>
                                <a class="navbar-item" href="/pages/tips">
                                    Elements
                                </a>
                                <a class="navbar-item" href="/pages/tips">
                                    Components
                                </a>
                                <a class="navbar-item" href="/pages/tips">
                                    Grid
                                </a>
                                <a class="navbar-item" href="/pages/tips">
                                    Layout
                                </a>
                            </div>
                        </div>
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
                        <a href="/podcasts" class="navbar-item">Podcasts</a>
                        <a href="/episodes" class="navbar-item">Episodes</a>
                        <a href="/proposal-viewer" class="navbar-item">XML Proposal Viewer</a>
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
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>


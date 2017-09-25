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

{{--                 <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        Overview
                    </div>
                    <div id="moreDropdown" class="navbar-dropdown">
                        <a class="navbar-item" href="/overview/start"  target="videa">
                            Start
                        </a>
                        <a class="navbar-item" href="/overview/introduction" target="videa">
                            Introduction
                        </a>
                        <a class="navbar-item" href="/overview/changelog" target="videa">
                            Changelog
                        </a>
                        <a class="navbar-item" href="/overview/tips" target="videa">
                            Tools and Tips
                        </a>
                    </div>
                </div> --}}

                {{-- <a href="{{ route('blog', Auth::user()) }}" class="navbar-item">Blog (Newsletter Archive)</a> --}}

{{--                 <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        Experiments
                    </div>
                    <div id="experimentsDropdown" class="navbar-dropdown">
                        <a href="{{ route('changelog', Auth::user()) }}" class="navbar-item">Changelog</a>
                        <a href="/proposal-viewer" class="navbar-item">XML Proposal Viewer</a>
                        <a href="{{ route('podcasts', Auth::user()) }}" class="navbar-item">Podcasts</a>
                        <a href="{{ route('episodes', Auth::user()) }}" class="navbar-item">Episodes</a>
                    </div>
                </div> --}}

                {{-- <a class="navbar-item" href="{{ route('dashboard') }}">Dashboard</a> --}}

                <a class="navbar-item" href="{{ route('dashboard') }}">Styleguide</a>

                <a class="navbar-item">
                    <b-icon icon="search"></b-icon>
                </a>

                @endif
            </div>
        </div>
    </div>
</nav>


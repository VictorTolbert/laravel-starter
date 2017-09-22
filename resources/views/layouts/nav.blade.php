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
                @if (Auth::guest())
                @else
                @endif
            </div>

            <div class="navbar-end">
                @if (Auth::guest())
                @else
                {{-- <div class="navbar-item">
                    <b-field>
                        <p class="control">
                            <b-dropdown>
                                <button class="button" slot="trigger">
                                    <span>Filters</span>
                                    <b-icon icon="arrow_drop_down"></b-icon>
                                </button>

                                <b-dropdown-item value="open_issues">Open Issues and Pull Requests</b-dropdown-item>
                                <b-dropdown-item value="your_issues">Your Issues</b-dropdown-item>
                                <b-dropdown-item value="pull_requests">Your Pull Requests</b-dropdown-item>
                                <b-dropdown-item value="everything">Everything</b-dropdown-item>
                            </b-dropdown>
                        </p>
                        <b-input icon="search" type="search" placeholder="Search..."></b-input>
                    </b-field>
                </div> --}}

                {{-- <div class="navbar-item">
                    <b-field>
                        <p class="control">
                            <button class="button is-primary">
                                WVVV
                            </button>
                        </p>
                        <p class="control">
                            <b-dropdown>
                                <button class="button is-primary" slot="trigger">
                                    <b-icon icon="arrow_drop_down"></b-icon>
                                </button>

                                <b-dropdown-item>Action</b-dropdown-item>
                                <b-dropdown-item>Another action</b-dropdown-item>
                                <b-dropdown-item>Something else</b-dropdown-item>
                            </b-dropdown>
                        </p>
                    </b-field>
                </div> --}}

                {{-- <div class="navbar-item has-dropdown is-hoverable">
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

                {{-- <a class="navbar-item">Blog (Newsletter Archive)</a> --}}

                {{-- <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        Experiments
                    </div>
                    <div id="experimentsDropdown" class="navbar-dropdown">
                        <a href="/changelog" class="navbar-item">Changelog</a>
                        <a href="/proposal-viewer" class="navbar-item">XML Proposal Viewer</a>
                        <a href="/podcasts" class="navbar-item">Podcasts</a>
                        <a href="/episodes" class="navbar-item">Episodes</a>
                    </div>
                </div> --}}


                <a class="navbar-item" href="{{ route('team') }}">Team</a>

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
                      <b-icon icon="settings">
                      </b-icon>
                </a>
                <a class="navbar-item">
                    <b-icon icon="help"></b-icon>
                </a>
                @endif
            </div>
        </div>
    </nav>
</div>


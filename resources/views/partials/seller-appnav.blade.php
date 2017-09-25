<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                @include('partials.svg.videa-logo')
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
                    <div class="navbar-item has-dropdown is-hoverable">
                        <div class="navbar-link">
                            Order Management
                        </div>
                        <div id="experimentsDropdown" class="navbar-dropdown">
                            <a href="{{ route('pending-orders', Auth::user()) }}" class="navbar-item">Pending Orders</a>
                            <a href="{{ route('pending-makegoods', Auth::user()) }}" class="navbar-item">Pending Makegoods</a>
                            <a href="{{ route('open-preempts', Auth::user()) }}" class="navbar-item">Open Preempts</a>
                            <a href="{{ route('order-search', Auth::user()) }}" class="navbar-item">Order Search</a>
                        </div>
                    </div>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <div class="navbar-link">
                            Reporting
                        </div>
                        <div id="experimentsDropdown" class="navbar-dropdown">
                            <a href="{{ route('account-performance', Auth::user()) }}" class="navbar-item">Account Performance</a>
                            <a href="{{ route('program-revenue', Auth::user()) }}" class="navbar-item">Program Revenue</a>
                            <a href="{{ route('order-reporting', Auth::user()) }}" class="navbar-item">Order Reporting</a>
                        </div>
                    </div>

                    <a href="{{ route('price-guide', Auth::user()) }}" class="navbar-item">Price Guide</a>
                    <a href="{{ route('avails', Auth::user()) }}" class="navbar-item">Avails</a>
                    <a href="{{ route('campaign-performance', Auth::user()) }}" class="navbar-item">Campaign Performance</a>

                    <b-dropdown v-model="isPublic">
                        <a class="navbar-item" slot="trigger">
                            <span class="icon">
                                <img src="{{ get_gravatar(Auth::user()->email) }}" style="margin-right: 0.5rem">
                            </span>
                            <span>{{ Auth::user()->name }}</span>
                            <b-icon icon="arrow_drop_down"></b-icon>
                        </a>

                        <b-dropdown-item has-link value="profile">
                            <a class="navbar-item" href="{{ route('profile', Auth::user()) }}">
                                <b-icon icon="person"></b-icon>
                                My Profile
                            </a>
                        </b-dropdown-item>


                        <hr class="dropdown-divider">

                        <b-dropdown-item value="settings" data-show="quickview" data-target="quickviewDefault">
                            <b-icon icon="settings"></b-icon>
                            Settings
                        </b-dropdown-item>

                        <b-dropdown-item has-link custom value="logout">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <b-icon icon="exit_to_app"></b-icon>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </b-dropdown-item>
                    </b-dropdown>
                @endif
            </div>
        </div>
    </div>
</nav>


<div>
    <div class="container">
        <nav class="navbar is-transparent">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ route('home') }}">
                    @include('partials.logo')
                    <span class="is-inline-flex">&nbsp;Design Engineering</span>
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://github.com/VictorTolbert" target="_blank">
                    <span class="icon" style="color: #333;">
                        <i class="fa fa-github"></i>
                    </span>
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://twitter.com/VictorTolbert" target="_blank">
                    <span class="icon" style="color: #55acee;">
                        <i class="fa fa-twitter"></i>
                    </span>
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
                        <a class="nav-item" href="{{ route('login') }}">Login</a>
                        <a class="nav-item" href="{{ route('register') }}">Register</a>
                    @else
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


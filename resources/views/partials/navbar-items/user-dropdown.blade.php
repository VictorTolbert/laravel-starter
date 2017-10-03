<div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">
        <span class="icon is-medium p-r-xs">
            {{-- <img src="{{ get_gravatar(Auth::user()->email) }}"> --}}
            <img src="/demo-user.png">
        </span>
        <span>{{ Auth::user()->name }}</span>
    </a>

    <div class="navbar-dropdown is-right">
       <a class="navbar-item" href="{{ route('profile', Auth::user()) }}">
            <span class="icon is-medium p-r-xs">
                {{-- <i class="material-icons">person</i> --}}
                @svg('material.person')
            </span>
            <span>My Profile</span>
        </a>

        <a class="navbar-item" data-show="quickview" data-target="settings">
            <span class="icon is-medium p-r-xs" style="color: #333;">
                {{-- <i class="material-icons">settings</i> --}}
                @svg('material.settings')
            </span>
            <span>Preferences</span>
        </a>

        <hr class="navbar-divider">

        <div class="navbar-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="icon is-medium p-r-xs" style="color: #333;">
                    {{-- <i class="material-icons">exit_to_app</i> --}}
                    @svg('material.exit-to-app')
                </span>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </div>
    </div>
</div>

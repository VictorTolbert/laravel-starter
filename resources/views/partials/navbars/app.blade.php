<nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                @include('partials.svgs.vti-logo')
                @include('partials.svgs.uxlab-logo')
            </a>
            @if (Auth::guest())
            @else
                <a class="navbar-item is-active" href="">
                    Design System
                </a>
            @endif


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
                    {{-- @include('partials.navbar-items.getting-started') --}}
                    {{-- @include('partials.navbar-items.components') --}}
                    @include('partials.navbar-items.design-system')
                    @include('partials.navbar-items.team')
                    {{-- @include('partials.navbar-items.design-tokens') --}}
                    {{-- @include('partials.navbar-items.icons') --}}
                    {{-- @include('partials.navbar-items.downloads') --}}
                    {{-- @include('partials.navbar-items.blog')  --}}
                    {{-- Newsletter, Blog, Links, Articles, Resources--}}
                    {{-- @include('partials.navbar-items.faq') --}}
                    {{-- @include('partials.navbar-items.feedback') --}}
                    @include('partials.navbar-items.user-dropdown')
                @endif
            </div>
        </div>
    </div>
</nav>

<nav class="navbar is-light" role="navigation" aria-label="navigation">
    <div class="container is-fluid">
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-brand">
{{--                 <span class="navbar-burger is-block" data-show="quickview" data-target="page-info">
                    <span></span>
                    <span></span>
                    <span></span>
                </span> --}}
            </div>
            <div class="navbar-start">
                {{-- @include('partials.navbar-items.search') --}}
                {{-- @include('partials.navbar-items.filter-list') --}}
            </div>
            <div class="navbar-end">
                {{-- @include('partials.navbar-items.format-size') --}}
                {{-- @include('partials.navbar-items.print') --}}
                {{-- @include('partials.navbar-items.export') --}}
                {{-- @include('partials.navbar-items.trash') --}}
                @include('partials.navbar-items.notes')
                @include('partials.navbar-items.preferences')
                {{-- @include('partials.navbar-items.settings') --}}
                {{-- @include('partials.navbar-items.help') --}}
                {{-- @include('partials.navbar-items.more') --}}
            </div>
        </div>
    </div>
</nav>

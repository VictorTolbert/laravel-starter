<nav class="navbar is-facebook" role="navigation" aria-label="navigation">
    <div class="container is-fluid">
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-brand">
                <span class="navbar-burger is-block" data-show="quickview" data-target="page-info">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div class="navbar-start"></div>
            <div class="navbar-end">
                @include('partials.navbar-items.preferences')
                @include('partials.navbar-items.format-size')
                @include('partials.navbar-items.help')
                @include('partials.navbar-items.notes')
            </div>
        </div>
    </div>
</nav>

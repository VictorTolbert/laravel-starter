<nav class="navbar is-dark" role="navigation" aria-label="navigation">
    <div class="container is-fluid">
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-brand">
                <span class="navbar-item is-size-5">Patterns</span>
            </div>
            <div class="navbar-start">
                <a href="{{route('atoms')}}" class="navbar-item">
                    <span class="icon m-r-sm">
                        @svg('atomic-design.atom')
                    </span>
                    <span>Atoms</span>
                </a>

                <a href="{{route('molecules')}}" class="navbar-item">
                    <span class="icon m-r-sm">
                        @svg('atomic-design.molecule')
                    </span>
                    <span>Molecules</span>
                </a>

                <a href="{{route('organisms')}}" class="navbar-item">
                    <span class="icon m-r-sm">
                        @svg('atomic-design.organism')
                    </span>
                    <span>Organisms</span>
                </a>

                <a href="{{route('templates')}}" class="navbar-item">
                    <span class="icon m-r-sm">
                        @svg('atomic-design.template')
                    </span>
                    <span>Templates</span>
                </a>

                <a href="{{route('pages')}}" class="navbar-item">
                    <span class="icon m-r-sm">
                        @svg('atomic-design.page')
                    </span>
                    <span>Pages</span>
                </a>

            </div>
            <div class="navbar-end">
                @include('partials.navbar-items.help')
            </div>
        </div>
    </div>
</nav>

